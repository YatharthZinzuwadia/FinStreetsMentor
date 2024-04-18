<?php 

Class Contact extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('user_model');
    }

    public function add(){
       if(isset($_REQUEST['submit'])){
        if(empty($this->session->userdata['user_id'])){
        echo "<script>alert('You must login first'); window.location='../';</script>";    
        }
        $res = $this->contact_model->add($_POST);
        echo "<script>alert('success fully send'); window.location='../';</script>";
       }else{
        echo "<script>alert('Something went Wrong'); window.location='../';</script>";
       }
    }
}
?>