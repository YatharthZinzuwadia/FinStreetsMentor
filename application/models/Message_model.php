<?php

class Message_model extends CI_Model {

    public function getByuser($type, $sender_id, $user_id) {
        if ($type == SENDER) {
            $this->db->select('user.*,message.*');
            $this->db->join('user', 'user.user_id = message.reciver_id');
            $this->db->where("(message.sender_id=$sender_id AND message.reciver_id=$user_id) OR (message.sender_id=$user_id AND message.reciver_id=$sender_id)");
//            $sql =  $this->db->get_where('message',['message.sender_id'=>$sender_id,'message.reciver_id'=>$user_id]);
            $this->db->order_by('send_on', 'ASC');
            $sql = $this->db->get('message');
            return $sql->result_array();
//            echo $this->db->last_query();
        } else {
            $this->db->select('user.*,message.*');
            $this->db->join('user', 'user.user_id = message.sender_id');
            return $this->db->get_where('message', ['message.reciver_id' => $user_id, 'message.sender_id' => $user_id])->result_array();
        }
    }

    public function add($data) {
        $item_arr = ['sender_id', 'reciver_id','message'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('message', $filter_data);
    }

}
