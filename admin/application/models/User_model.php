<?php

class User_model extends CI_Model {

    public function add($data) {
        $item_arr = ['full_name', 'username', 'email', 'password','role_id'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('user', $filter_data);
    }

    public function get($role_id){
        return $this->db->join('role', 'role.role_id = user.role_id')->get_where('user',['user.role_id' => $role_id])->result_array();
    }

    public function get_single($user_id) {
        return $this->db->join('role', 'role.role_id = user.role_id')->get_where('user', ['user_id' => $user_id])->row_array();
    }

    public function update($data){
        $item_arr=['username','password','role_id','about_user','full_name','email'];
		// print_r($data);die;
        $filter_data= elements($item_arr, $data);
        $this->db->update('user', $filter_data ,['user_id' => $data['user_id']]);
    }
    public function delete($user_id){
        $this->db->delete('user',['user_id' => $user_id]);
    }
    public function getPayments(){
        return $this->db->join('user', 'user.user_id = payment.user_id')->get('payment')->result_array();
    }

    public function updateUserIsOnLine(){
        $item_arr=['is_online'];
        $data['is_online'] = 1;
        $filter_data= elements($item_arr, $data);
        return $this->db->update('user', $filter_data ,['user_id' => $this->session->userdata['user_data']['user_id']]);
    }

}

?>
