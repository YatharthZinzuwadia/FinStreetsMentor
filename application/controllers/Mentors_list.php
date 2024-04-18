<?php

class Mentors_list extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('user_model');
        $this->load->model('courseusrmap_model');
    }
/*
    public function index() {
        $data['mentor'] = $this->user_model->getmentors();
        $data['page_name'] = 'home/mentor';
        $this->load->view('template/index', $data);
    }*/

    public function mentorlist() {
        if (isset($_POST['course_id'])) {
            $data['mentor'] = $this->courseusrmap_model->getByCourse($_POST['course_id']);
            $data['page_name'] = 'home/mentorlist';
            $this->load->view('template/index', $data);
        }
    }

    public function material() {
        $purchaseMaterial = [];
        if (isset($this->session->userdata['user_id'])) {
            $userId = $this->session->userdata['user_id'];
            $materials = $this->db->query(" SELECT material_id FROM `payment` WHERE user_id = " . $userId)->result_array();
            foreach($materials as $material) {
                $purchaseMaterial[] = $material['material_id'];
            }
        }
        if (isset($_POST['course_id'])) {
            $data['materials'] = $this->courseusrmap_model->getMaterial($_POST['course_id']);
            $data['purchaseMaterial'] = $purchaseMaterial;
            $data['page_name'] = 'home/materiallist';
            $this->load->view('template/index', $data);
        }
    }

}

?>