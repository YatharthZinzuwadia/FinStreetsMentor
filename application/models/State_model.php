<?php
class State_model extends CI_model{
    
    public function get(){
    return  $this->db->get('state')->result_array();
    }
}



?>