<?php

class City_model extends CI_Model {

    public function add($data) {
        $item_arr = ['cname', 'sid'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('city', $filter_data);
    }

    public function update($data) {
        $item_arr = ['cname', 'cid'];
        $filter_data = elements($item_arr, $data);
        $this->db->update('city', $filter_data, ['cid' => $data['cid']]);
    }

    public function get($cid = "") {
        if (!empty($cid)) {
            return $this->db->get_where('city', ['cid' => $cid])->row_array();
        } else {
            $this->db->select('city.*,state.*');
//        $this->db->from('city');
            $this->db->join('state', 'city.sid = state.sid');
            return $this->db->get('city')->result_array();
        }
    }

    public function getSingle($cid = 1) {
        return $this->db->get_where('city', ['cid' => $cid])->row_array();
    }

    public function delete($city_id) {
        $this->db->delete('city', ['cid' => $city_id]);
    }

}
