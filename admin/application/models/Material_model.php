<?php

class Material_model extends CI_Model
{

    public function add($data)
    {
        $item_arr = ['menter_id', 'title', 'price', 'description', 'material_file'];
        $filter_data = elements($item_arr, $data);
        $this->db->insert('material', $filter_data);
    }

    public function get($userId = "")
    {
        if (!empty($userId)) {
			return $this->db->join('material', 'material.material_id = payment.material_id')->join('user', 'user.user_id = payment.user_id')->get_where('payment', ['material.menter_id' => $userId])->result_array();
        } else {
            if ($this->session->userdata('user_data')['role_id'] != 2) {
                $this->db;
                return $this->db->join('user', 'user.user_id = material.menter_id')->get('material')->result_array();
            } else {
				$this->db;
				return $this->db->join('user', 'user.user_id = material.menter_id')->where(['menter_id' => $this->session->userdata('user_data')['user_id']])->get('material')->result_array();
			}
        }
    }

    public function update($data)
    {
        $item_arr = ['menter_id', 'title', 'description', 'price', 'file'];

        if (empty($data['image_name'])) {
            $indexCompleted = array_search('image_name', $item_arr);
            unset($item_arr[$indexCompleted]);
        }
        $filter_data = elements($item_arr, $data);
        return $this->db->update('material', $filter_data, ['material_id' => $data['material_id']]);
    }

    public function delete($material_id)
    {
        $this->db->delete('material', ['material_id' => $material_id]);
    }

}
