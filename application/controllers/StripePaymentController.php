<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StripePaymentController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->model('Cart_model');
    }

    public function index()
    {

        if (!isset($this->session->userdata['user_id'])) {
            redirect('/');
        }
        // if (isset($_POST['button_subtype']) && trim($_POST['button_subtype']) == 'cart_item') {
        //     echo 1;
        // } else {
        //     echo 0;
        // }
        // echo $_POST['button_subtype'];die;
        if (isset($_POST['button_subtype']) && trim($_POST['button_subtype']) == 'material') {
            $_SESSION['material_data'] = [
                'material_id' => $_POST['material_id'],
                'title' => $_POST['material_title'],
                'ammount' => $_POST['ammount'],
                'type' => 2,
            ];
        } else if (isset($_POST['button_subtype']) && trim($_POST['button_subtype']) == 'cart_item') {
            $userId = $this->session->userdata['user_id'];
            $cartItem = [];
            $carts = $this->Cart_model->get($userId);
            foreach ($carts as $key => $cart) {
                $cartItem[] = [
                    'package_id' => $cart['title'],
                    'ammount' => $cart['price'],
                    'user_id' => $userId,
                    'created_on' => date('Y-m-d'),
                    'status' => 1,
                    'type' => 2,
                    'material_id' => $cart['material_id'],
                ];
            }
            if (!empty($cartItem)) {
                $_SESSION['cart_items'] = $cartItem;
            }
        } else if (isset($_POST['package_type'])) {
            echo 'dsf';
            print_r($_POST['button_subtype']);
            die;
            $_SESSION['material_data'] = [
                'material_id' => $_POST['package_type'],
                'ammount' => $_POST['ammount'],
                'type' => 1,
            ];
            $packageDay = $_POST['package_type'];
            $today = date('Y-m-d');
            $_SESSION['plan_data'] = [
                'payment_id' => $_POST['payment_id'],
                'user_id' => $this->session->userdata['user_id'],
                'renew_on' => $today,
                'trail_period' => 1,
                'package_id' => 1,
                'starting_on' => $today,
                'ending_on' => date('Y-m-d', strtotime($today . ' +' . $packageDay)),
                'status' => 1,
            ];
        } else {
            echo 'in else';
            die;
            redirect('/');
        }
        $data['price_id'] = $_POST['price_id'];
        $this->load->view('plans/checkout', $data);
    }

    public function handlePayment()
    {
        require_once APPPATH . 'libraries\stripe-php\vendor\autoload.php';
        $stripeSecretKey = "sk_test_51MdsUwSDCr6tEF9pa2KmHLrVhjgC0zmh87G9YSFpUQ7CDqFQ1amYyOuY7xYHLxxkXJvc7hnaSXp80VvL71sO7XrL002johx5X8";
        \Stripe\Stripe::setApiKey($stripeSecretKey);
        $YOUR_DOMAIN = "http://localhost/innovative_solution/";
        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                'price' => $_POST['price_id'],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => base_url() . "stripepaymentcontroller/success",
            'cancel_url' => base_url() . "stripepaymentcontroller/cancel"
        ]);
        redirect($checkout_session['url'], 'refresh');
    }

    public function success()
    {
        if (!empty($_SESSION['material_data'])) {
            $data = array(
                'package_id' => $_SESSION['material_data']['title'],
                'ammount' => $_SESSION['material_data']['ammount'],
                'user_id' => $this->session->userdata['user_id'],
                'created_on' => date('Y-m-d'),
                'status' => 1,
                'type' => $_SESSION['material_data']['type'],
                'material_id' => $_SESSION['material_data']['material_id'],
            );
            $this->db->insert('payment', $data);
        }

        if (!empty($_SESSION['cart_items'])) {
            foreach ($_SESSION['cart_items'] as $item) {
                $this->db->insert('payment', $item);
            }
            $userId = $this->session->userdata['user_id'];
            $carts = $this->Cart_model->clearCart($userId);
        }

        if (!empty($_SESSION['plan_data'])) {
            $this->db->insert('sub_status', $_SESSION['plan_data']);
        }

        $_SESSION['material_data'] = $_SESSION['plan_data'] = $_SESSION['cart_items'] = [];
        $this->user_model->updateUserIsOnLine();
        $this->load->view('plans/success');
    }


    public function cancell()
    {
        $_SESSION['material_data'] = $_SESSION['plan_data'] = $_SESSION['cart_items'] = [];
        $this->load->view('plans/cancel');
    }
}
