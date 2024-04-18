<?php

class Cart_model extends CI_Model
{

    public function add($data)
    {
        $item_arr = ['user_id', 'material_id', 'created_at'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('cart', $filter_data);
    }

    public function get($userId)
    {
        return $this->db->join('material', 'material.material_id = cart.material_id')->join('user', 'user.user_id = material.menter_id')->get_where('cart', ['cart.user_id' => $userId])->result_array();
    }

    public function update($data)
    {
        $item_arr = ['title', 'description', 'image_name'];
        if (empty($data['image_name'])) {
            $indexCompleted = array_search('image_name', $item_arr);
            unset($item_arr[$indexCompleted]);
        }
        $filter_data = elements($item_arr, $data);
        return $this->db->update('course_image', $filter_data, ['course_id' => $data['course_id']]);
    }

    public function delete($cartId)
    {
        $this->db->delete('cart', ['cart_id' => $cartId]);
    }

    public function clearCart($userId)
    {
        $this->db->delete('cart', ['user_id' => $userId]);
    }

    public function order($userId)
    {
        return $this->db->join('material', 'material.material_id = payment.material_id')->join('user', 'user.user_id = material.menter_id')->get_where('payment', ['payment.user_id' => $userId])->result_array();
    }
}
