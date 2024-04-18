<?php
class Plans_model extends CI_model{
    
    public function get($id=""){
        if($id == ""){
            return $this->db->get('package')->result_array();
        }else{
            return $this->db->get_where('package',['id'=>$id])->row_array();
        }
    }

    public function getMaxEndDate($user_id){
        $this->db->select('max(ending_on) as max_end_date');
        return $this->db->get_where('sub_status',['user_id'=>$user_id])->row_array()['max_end_date'];
    }
    public function getPackage($package_id){
        return $this->db->get_where('package',['id'=>$package_id])->row_array()['type'];
    }
    public function add($data){
        $this->db->insert('sub_status',$data);
    }
    public function getRows($id = ''){ 
        $this->db->select('*'); 
        $this->db->from('package'); 
        // $this->db->where('status', '1'); 
        if($id){ 
            $this->db->where('id', $id); 
            $query = $this->db->get(); 
            $result = $query->row_array(); 
        }else{ 
            $this->db->order_by('type', 'asc'); 
            $query = $this->db->get(); 
            $result = $query->result_array(); 
        } 
         
        // return fetched data 
        return !empty($result)?$result:false; 
    } 
}



?>