<?php

class Cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model');
    }

    public function index()
    {
        if (isset($this->session->userdata['user_id'])) {
            $userId = $this->session->userdata['user_id'];
            $data['page_name'] = 'home/cart';
            $data['carts'] = $this->Cart_model->get($userId);
            $this->load->view('template/index', $data);
        } else {
            redirect('/');
        }
    }

    public function addToCart()
    {
        if (isset($this->session->userdata['user_id']) && isset($_POST['material_id'])) {
            $userId = $this->session->userdata['user_id'];
            $materialId = $_POST['material_id'];
            # Need save value in cart table
            $countMap = $this->db->query("SELECT * FROM `cart` WHERE material_id = " . $materialId . " AND user_id =" . $userId)->num_rows();
            if ($countMap == 0) {
                $data = ["user_id" => $userId, "material_id" => $materialId, 'created_at' => date('y-m-d h:i:s')];
                $this->Cart_model->add($data);
                echo 1;
            } else {
                echo 1;
            }
        } else {
            echo 0;
        }
    }

    public function deleteCart()
    {
        if (isset($this->session->userdata['user_id']) && isset($_POST['cart_id'])) {
            $userId = $this->session->userdata['user_id'];
            $cartId = $_POST['cart_id'];
            $this->Cart_model->delete($cartId);
            echo 1;
        } else {
            echo 0;
        }
    }

    public function orders()
    {
        if (isset($this->session->userdata['user_id'])) {
            $userId = $this->session->userdata['user_id'];
            $data['page_name'] = 'home/order';
            $data['orders'] = $this->Cart_model->order($userId);
            $this->load->view('template/index', $data);
        } else {
            redirect('/');
        }
    }
}
