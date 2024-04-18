<?php
class City_model extends CI_model{
    
    public function get(){
    return  $this->db->get('city')->result_array();
    }
}



?>