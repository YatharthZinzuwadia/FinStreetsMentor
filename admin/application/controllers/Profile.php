<?php 

class Profile extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index(){
        $data['page_name']='profile/edit';
        $data['page_heading']='My Profile';
        $data['row']= $this->user_model->get_single($this->session->userdata('user_data')['user_id']);
        $data['slug']='profile';
        $this->load->view('include/template',$data);
    }
    public function update(){
        
        $this->user_model->update($_POST);
        $data['slug']='profile';
    }
}


?>