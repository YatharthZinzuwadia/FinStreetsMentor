<?php

class Slider extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('slider_model');
    }

    public function index() {
        $data['page_name'] = 'slider/index';
        $data['slug'] = 'manage-slider-image';
        $data['result'] = $this->slider_model->get();
        $this->load->view('include/template', $data);
    }

    public function add() {
        if (isset($_POST['sub'])) {
            $this->load->helper('fileupload_helper');
            $image_filed_name = 'slider_image';
            $post_field_name = 'image_name';
            $upload_path = '../assets/images/slider_images/';
            $redirect_on = 'slider/add';
            fileUpload($image_filed_name, $upload_path, $redirect_on, $post_field_name);
            if (empty($_POST['sort_order']))
                $_POST['sort_order'] = 0;
            $this->slider_model->add($_POST);
            $this->session->set_flashdata('success', 'Image uploaded successfully');
            redirect('slider/index');
        } else {
            $data['page_name'] = 'slider/add';
            $data['slug'] = 'manage-slider-image';
            $data['page_heading'] = 'Add New slider Image';
            $this->load->view('include/template', $data);
        }
    }

    public function edit($slider_image_id = "") {

        if (isset($_POST['sub'])) {
//            print_r($_POST);
            
            if (!empty($_FILES['slider_image']['name'])) {
                
                $this->load->helper('fileupload_helper');
                $image_filed_name = 'slider_image';
                $post_field_name = 'image_name';
                $upload_path = '../assets/images/slider_images/';
                $redirect_on = 'slider/edit/'.$slider_image_id;
                fileUpload($image_filed_name, $upload_path, $redirect_on, $post_field_name);
                unlink($upload_path.$_POST['current_image']);
            }else{
                $_POST['image_name'] = "";
            }
            $this->slider_model->update($_POST);
            redirect('slider/index');
        } else {
            $data['row'] = $this->slider_model->get($slider_image_id);
            $data['page_name'] = 'slider/edit';
            $data['slug'] = 'manage-slider-image';
            $data['page_heading'] = 'Update slider Image';
            $this->load->view('include/template', $data);
        }
    }

    public function delete($slider_image_id,$image_name) {
        $upload_path = '../assets/images/slider_images/';
        unlink($upload_path.$image_name);
        $this->slider_model->delete($slider_image_id);
        redirect('slider/index');
    }

    public function del() {
        $this->load->helper('fileupload_helper');
        abc();
    }

}

?>
