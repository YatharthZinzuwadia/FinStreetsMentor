<?php

class Managecomplaints extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('complaints_model');
        $this->load->model('mentor_model');
        $this->load->model('student_model');
    }

    public function index() {
        $data['page_name'] = 'managecomplaints/index';
        $data['slug'] = 'manage-complaints';
        $data['result'] = $this->complaints_model->get();
        $this->load->view('include/template', $data);
    }

    public function reply($user_id="") {
        if(isset($_POST['sub'])) {
            $this->complaints_model->add($_POST);
            redirect('managecomplaints/index');
        } else {
            $data['page_name'] = 'managecomplaints/reply';
            $data['page_heading'] = 'Reply';
            $data['slug'] = 'manage-complaints';
            $data['result'] = $this->complaints_model->get_single($user_id);
            $this->load->view('include/template', $data);
        }
    }

    public function view($user_id = "") {
            $data['page_name'] = 'managecomplaints/view';
            $data['page_heading'] = 'View';
            $data['slug'] = 'manage-complaints';
            $data['result'] = $this->complaints_model->get_single($user_id);
            $this->load->view('include/template', $data);
    }
    public function delete($user_id = "") {
            if($user_id){
                $this->complaints_model->delete($user_id);
                redirect('managecomplaints');
            }    
    }

}

?>
