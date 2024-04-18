<?php

class Managestudent extends CI_Controller {
    public $role_id = 3;
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('role_model');
    }

    public function index() {
        $data['page_name'] = 'managestudent/index';
        $data['slug'] = 'manage-student';
        $data['page_heading'] = "Manage Student";
        $data['result'] = $this->user_model->get($this->role_id);
        $this->load->view('include/template', $data);
    }

    public function add() {
        if (isset($_POST['sub'])) {
            $this->user_model->add($_POST);
            redirect('managestudent/index');
        } else {
            $data['page_name'] = 'managestudent/add';
            $data['page_heading'] = 'ADD Student';
            $data['slug'] = 'manage-student / add /';
            $role_id=3;
            $data['result'] = $this->user_model->get($role_id);
            $this->load->view('include/template', $data);
        }
    }

    public function edit($user_id = "") {
        if (isset($_POST['sub'])) {
            $this->user_model->update($_POST);
            redirect('managestudent/index');
        } else {
            $data['page_name'] = 'managestudent/edit';
            $data['page_heading'] = 'EDIT STUDENT DETAILS';
            $data['slug'] = 'manage-mentor / edit /';
            $role_id = 2;
            $data['row'] = $this->user_model->get_single($user_id);
            $this->load->view('include/template', $data);
        }
    }

    public function delete($user_id) {
        $this->user_model->delete($user_id);
        redirect('managementor/index');
    }

}

?>
