<?php 

class Payments extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index(){
        $data['slug']= 'manage-payment';
        $data['page_name']='payment/index';
        $data['page_heading']='manage-payment';
        $data['result']= $this->user_model->getPayments();
        $this->load->view('include/template',$data);
    }
}


?>