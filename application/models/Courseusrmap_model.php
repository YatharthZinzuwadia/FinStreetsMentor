<?php

class Courseusrmap_model extends CI_Model
{

    public function add($data)
    {
        $item_arr = ['course_id', 'user_id'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('course_user_map', $filter_data);
    }

    public function update($data)
    {
        $item_arr = ['course_id', 'user_id'];
        $filter_data = elements($item_arr, $data);
        $this->db->update('course_user_map', $filter_data, ['course_user_map_id' => $data['course_user_map_id']]);
    }

    public function get($course_user_map_id = "")
    {
        if (!empty($course_user_map_id)) {
            return $this->db->get_where('course_user_map', ['course_user_map_id' => $course_user_map_id])->row_array();
        } else {
            $this->db->select('course_user_map.*,user.*,course_image.*');
            $this->db->join('user', 'course_user_map.user_id = user.user_id');
            $this->db->join('course_image', 'course_user_map.course_id = course_image.course_id');
            return $this->db->get('course_user_map')->result_array();
        }
    }

    public function getSingle($course_user_map_id = 1)
    {
        return $this->db->get_where('course_user_map', ['course_user_map_id' => $course_user_map_id])->row_array();
    }

    public function delete($course_user_map_id)
    {
        $this->db->delete('course_user_map', ['course_user_map_id' => $course_user_map_id]);
    }

    public function getByCourse($course_id)
    {
        $this->db->select('course_image.*,user.*');
        $this->db->join('user', 'course_image.course_id = user.course_id');
        $this->db->where('user.course_id', $course_id);
        return $this->db->get('course_image')->result_array();
    }

    public function getMaterial($course_id)
    {
        return $this->db->query("SELECT *FROM material JOIN user ON menter_id = user_id WHERE menter_id IN (SELECT user_id FROM course_user_map WHERE course_id =" . $course_id . ")")->result_array();

    }

}
