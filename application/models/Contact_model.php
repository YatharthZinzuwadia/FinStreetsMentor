<?php 
class Contact_model extends CI_Model{
    public function add($data){
       $insert_data =array(
           'name' => $data['name'],
           'email' => $data['email'],
           'c_tittle' => $data['subject'],
           'c_description' => $data['message'],
           'user_id' => $this->session->userdata['user_id']
       );
       $res= $this->db->insert('complaints',$insert_data);
       return $res;
    }
}


?>