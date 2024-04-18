<?php

class State_model extends CI_Model {
   
    public function add($data) {
        $item_arr = ['sid','sname'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('state', $filter_data);
    }

    public function get($sid="") {
        if (!empty($sid)) {
            return $this->db->get_where('state', ['sid' => $sid])->row_array();
        } else {
          
            return $this->db->get('state')->result_array();
        }
    }

    public function getSingle($sid = "") {
        return $this->db->get_where('state', ['sid' => $sid])->row_array();
    }

    public function delete($state_id) {
        $this->db->delete('state', ['sid' => $state_id]);
    }
    public function update($data){
        $item_arr = ['sid','sname'];
        $filter_data = elements($item_arr, $data);
        $this->db->update('state',$filter_data,['sid' =>$data['sid']]);
    }
}
