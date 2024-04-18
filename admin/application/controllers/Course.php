<?php

class Course extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_model');
    }

    public function index()
    {
        $data['page_name'] = 'course/index';
        $data['slug'] = 'manage-course';
        $data['result'] = $this->course_model->get();
        $this->load->view('include/template', $data);
    }

    public function add()
    {
        if (isset($_POST['sub'])) {
            $this->load->helper('fileupload_helper');
            $image_filed_name = 'slider_image';
            $post_field_name = 'image_name';
            $upload_path = '../assets/images/course_images/';
            $redirect_on = 'course/add';
            fileUpload($image_filed_name, $upload_path, $redirect_on, $post_field_name);
            $this->course_model->add($_POST);
            $this->session->set_flashdata('success', 'Image uploaded successfully');
            redirect('course/index');
        } else {
            $data['page_name'] = 'course/add';
            $data['slug'] = 'manage-course-image';
            $data['page_heading'] = 'Add New Course';
            $this->load->view('include/template', $data);
        }

    }

    public function edit($course_image_id = "")
    {

        if (isset($_POST['sub'])) {
            if (!empty($_FILES['slider_image']['name'])) {
                $this->load->helper('fileupload_helper');
                $image_filed_name = 'slider_image';
                $post_field_name = 'image_name';
                $upload_path = '../assets/images/course_images/';
                $redirect_on = 'course/edit/' . $course_image_id;
                fileUpload($image_filed_name, $upload_path, $redirect_on, $post_field_name);
                unlink($upload_path . $_POST['current_image']);
            } else {
                $_POST['image_name'] = "";
            }
            $this->course_model->update($_POST);
            redirect('course/index');
        } else {
            $data['row'] = $this->course_model->get($course_image_id);
            $data['page_name'] = 'course/edit';
            $data['slug'] = 'manage-course';
            $data['page_heading'] = 'Update course';
            $this->load->view('include/template', $data);
        }
    }

    public function delete($course_image_id, $image_name)
    {
        $upload_path = '../assets/images/course_images/';
        unlink($upload_path . $image_name);
        $this->course_model->delete($course_image_id);
        redirect('course/index');
    }

    public function del()
    {
        $this->load->helper('fileupload_helper');
        abc();
    }

}
