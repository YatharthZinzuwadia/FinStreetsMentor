<?php 

class Role_model extends CI_Model{
  
    public function add($data){
        $item_arr=['role_name'];
        $filter_data= elements($item_arr, $data);
        $this->db->insert('role',$filter_data);
    }

    
    public function get($role_id=""){
        if(!empty($role_id)){
            return $this->db->get_where('role',['role_id' => $role_id])->row_array();
        }else{
            return $this->db->get('role')->result_array();
        }
        
    }
  
    public function update($data){
        $item_arr=['role_id','role_name'];
        $filter_data= elements($item_arr, $data);
        return $this->db->update('role',$filter_data,['role_id' => $data['role_id']]);
    }
        

    public function delete($id){
        $this->db->delete('role',['role_id' => $id]);
    }
    
}



?>