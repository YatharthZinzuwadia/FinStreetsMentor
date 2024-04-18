<?php

class Cms_model extends CI_Model {

    public function update($data,$table_name,$primary_key) {
        if($table_name == 'about_info'){
            $item_arr = ['info', 'is_primary'];
        }
        $filter_data = elements($item_arr, $data);
        $this->db->update('city', $filter_data, [$table_name.'_id' => $primary_key]);
    }

    public function get($table_name,$primary_key="") {
        if (!empty($primary_key)) {
            return $this->db->get_where($table_name, [$table_name.'_id' => $primary_key])->row_array();
        } else {
            return $this->db->get($table_name)->result_array();
        }
    }


}
