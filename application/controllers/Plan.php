<?php 

class Plan extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('plans_model');
        $this->load->library('paypal_lib');
    }

    public function index(){
    	$data['page_slug'] = 'Subscription plans';
    	$data['plan'] = $this->plans_model->get();
   		$this->load->view('plans/index',$data);
    }

        function buy($id){ 
        // Set variables for paypal form 
        $returnURL = base_url().'paypal/success'; //payment success url 
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url 
        $notifyURL = base_url().'paypal/ipn'; //ipn url 
         
        // Get product data from the database 
        $product = $this->plans_model->get($id); 
         
        // Get current user ID from the session (optional) 
        $userID = !empty($_SESSION['userID'])?$_SESSION['userID']:1; 
         
        // Add fields to paypal form 
        $this->paypal_lib->add_field('return', $returnURL); 
        $this->paypal_lib->add_field('cancel_return', $cancelURL); 
        $this->paypal_lib->add_field('notify_url', $notifyURL); 
        $this->paypal_lib->add_field('item_name', $product['type']); 
        $this->paypal_lib->add_field('custom', $userID); 
        $this->paypal_lib->add_field('item_number',  $product['id']); 
        $this->paypal_lib->add_field('amount',  $product['amount']); 
         
        // Render paypal form 
        $this->paypal_lib->paypal_auto_form(); 
    } 

}
