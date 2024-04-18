<?php

class Mentor_model extends CI_Model {

    public function add($data) {
        $item_arr = ['username', 'password','role_id'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('user', $filter_data);
    }

    public function get(){
        return $this->db->get_where('user',['role_id' => 2])->result_array();
    }

    public function get_single($user_id) {
        return $this->db->get_where('user', ['user_id' => $user_id])->row_array();
    }

    public function update($data){
        $item_arr=['username','password','role_id'];
        $filter_data= elements($item_arr, $data);
        $this->db->update('user', $filter_data ,['user_id' => $data['user_id']]);
    }
    public function delete($user_id){
        $this->db->delete('user',['user_id' => $user_id]);
    }

}

?>