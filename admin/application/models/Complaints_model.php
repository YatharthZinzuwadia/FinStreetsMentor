<?php

class Complaints_model extends CI_Model {

    public function add($data) {
        $data_arr = ['c_tittle', 'c_description', 'user_id'];
        $filter_data = elements($data_arr, $data);
        $this->db->insert('complaints', $filter_data);
    }

    public function get($user_id="") {
        if(!empty($user_id)){
        $this->db->select('complaints.*');
        $this->db->join('user','complaints.user_id = user.user_id');
        return $this->db->get('complaints')->row_array();
        }else{
        $this->db->select('complaints.*,user.*');
        $this->db->join('user', 'complaints.user_id = user.user_id');
        $this->db->join('role', 'user.role_id = role.role_id');
        return $this->db->get('complaints')->result_array();
    }}

    public function get_single($id) {
        return $this->db->join('user', 'complaints.user_id = user.user_id')->get_where('complaints', ['id' => $id])->row_array();
    }
    public function delete($id){
        return $this->db->delete('complaints', ['id' => $id]);
    }
}
