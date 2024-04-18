<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        $data['error'] = "";
        if (isset($_POST['sub'])) {
            $userData = $this->login_model->auth($_POST['username'], $_POST['password']);

            if (!empty($userData)) {
                $this->session->user_data = $userData;
                $this->login_model->update($userData); 
                redirect('dashboard');
            }else{
                $data['error'] = "<em style='color:red;'>Invalid Username Or Password</em>";
            }
        } 
            $data['page_name'] = 'login/index';
            $data['slug'] = 'index';
            $this->load->view('login/index',$data);
    }
    public function logout(){
        $this->login_model->is_logout($this->session->user_data);
        $this->session->unset_userdata('user_data');
        redirect('login/index');
    }

}

?>