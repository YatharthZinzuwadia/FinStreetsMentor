<?php

class Slider_model extends CI_Model {

    public function get($slider_image_id = "") {
        if (!empty($slider_image_id)) {
            return $this->db->get_where('slider_image', ['slider_image_id' => $slider_image_id])->row_array();
        } else {
            $this->db->order_by('sort_order', 'ASC');
            return $this->db->get('slider_image')->result_array();
        }
    }

}

?>