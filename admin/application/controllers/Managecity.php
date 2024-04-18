<?php

class Managecity extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('city_model');
        $this->load->model('state_model');
    }

    public function index() {
        $data['page_name'] = 'managecity/index';
        $data['slug'] = 'manage-city';
        $data['result'] = $this->city_model->get();
        $this->load->view('include/template', $data);
    }

    public function add() {
        if (isset($_POST['sub'])) {
//            print_r($_POST);
            $this->city_model->add($_POST);
            redirect('managecity/index');
        } else {
            $data['result'] = $this->state_model->get();
            $data['page_name'] = 'managecity/add';
            $data['slug'] = 'manage-city';
            $data['page_heading'] = 'Add New City';
            $this->load->view('include/template', $data);
        }
    }

    public function edit($cid = "") {
        if (isset($_POST['sub'])) {
//            print_r($_POST);
            $this->city_model->update($_POST);
            redirect('managecity/index');
        } else {
            $data['states'] = $this->state_model->get();
            $data['row'] = $this->city_model->get($cid);
            $data['page_name'] = 'managecity/edit';
            $data['slug'] = 'manage-city';
            $data['page_heading'] = 'Update City';
            $this->load->view('include/template', $data);
        }
    }

    public function delete($cid) {
        $this->city_model->delete($cid);
        redirect('managecity/index');
    }

}

?>