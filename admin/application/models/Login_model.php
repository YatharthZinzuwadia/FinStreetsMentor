<?php

class Login_model extends CI_Model{
     
    public function auth($username,$passsword){
         return $this->db->select('user.*')->from('user')
		 ->where('email',$username)
		 ->where('password',$passsword)
		 ->where('role_id !=', '3')->get()->row_array();
	}
	public function update($data){
	  $this->db->set('is_online', 1);
      $this->db->where('user_id',$data->user_id);
      $this->db->update('user');
	}
	public function is_logout($data){
	  $this->db->set('is_online', 0);
      $this->db->where('user_id',$data->user_id);
      $this->db->update('user');
	}
}