<?php

class Course_model extends CI_Model {

    public function add($data) {
        $item_arr = ['title', 'description', 'image_name'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('course_image', $filter_data);
    }

    public function get($course_id = "") {
        if (!empty($course_id)) {
            return $this->db->get_where('course_image', ['course_id' => $course_id])->row_array();
        } else {
            $this->db;
            return $this->db->get('course_image')->result_array();
        }
    }

    public function update($data) {
        $item_arr = ['title', 'description', 'image_name'];
        if (empty($data['image_name'])) {
            $indexCompleted = array_search('image_name', $item_arr);
            unset($item_arr[$indexCompleted]);
        }
        $filter_data = elements($item_arr, $data);
        return $this->db->update('course_image', $filter_data, ['course_id' => $data['course_id']]);
    }

    public function delete($course_id) {
        $this->db->delete('course_image', ['course_id' => $course_id]);
    }

}

?>
