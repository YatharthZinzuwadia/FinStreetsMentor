<?php

class Slider_model extends CI_Model {

    public function add($data) {
        $item_arr = ['image_name', 'image_tag', 'image_title', 'image_sub_title', 'sort_order'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('slider_image', $filter_data);
    }

    public function get($slider_image_id = "") {
        if (!empty($slider_image_id)) {
            return $this->db->get_where('slider_image', ['slider_image_id' => $slider_image_id])->row_array();
        } else {
            $this->db->order_by('sort_order', 'ASC');
            return $this->db->get('slider_image')->result_array();
        }
    }

    public function update($data) {
        $item_arr = ['image_name', 'image_tag', 'image_title', 'image_sub_title', 'sort_order'];
        echo "<pre>";
        print_r($item_arr);
        echo "</pre>";
//        exit();
        if (empty($data['image_name'])) {
            $indexCompleted = array_search('image_name', $item_arr);
            unset($item_arr[$indexCompleted]);
        }
//        echo "<pre>";
//        print_r($item_arr);
//        echo "</pre>";
//        exit();
        $filter_data = elements($item_arr, $data);
        return $this->db->update('slider_image', $filter_data, ['slider_image_id' => $data['slider_image_id']]);
    }

    public function delete($slider_image_id) {
        $this->db->delete('slider_image', ['slider_image_id' => $slider_image_id]);
    }

}

?>