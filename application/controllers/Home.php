<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_model');
        $this->load->model('slider_model');
        $this->load->model('user_model');
        $this->load->model('state_model');
        $this->load->model('city_model');
        $this->load->model('city_model');
        $this->load->helper('fileupload_helper');
        $this->load->helper('mail_helper');
    }

    public function index()
    {
        $data['page_name'] = 'home/index';
        $data['slug'] = 'home';
        $data['course'] = $this->course_model->course_details();
        $data['state'] = $this->state_model->get();
        $data['city'] = $this->city_model->get();
        $data['slider_image'] = $this->slider_model->get();
        $this->load->view('template/index', $data);
    }

    public function get_mentors()
    {
        $data['mentor'] = $this->user_model->getmentors($_POST['course']);
        echo json_encode($data);
    }

    public function register()
    {
        if (isset($_POST['sub'])) {

            $post_field_name = $_FILES['profile']['name'];
            $upload_path = base_url() . 'assets/user_profile/';
            fileUpload('profile', $upload_path, '', $post_field_name);
            $profile = isset($_POST[$post_field_name]) ? $_POST[$post_field_name] : 'sample.png';
            $last_insert_id = $this->user_model->add($_POST, $profile);
            $this->user_model->TrailEntry($last_insert_id);
            semdEmail($_POST['email'], 'registration', ' You have successfully registred!,<br>
            Thank You for Joining with us,<br>
            Hello <br>
            We are happy to have aboard!');
            if ($last_insert_id) {

                echo "<script>alert('success...!!! NoW Login to Your Accout');window.location ='../home';</script>";
            } else {
                echo "<script>alert('email is alert Taken');window.location = '../home';</script>";
            }
        }
    }

    public function login()
    {
        if (isset($_POST['sub'])) {
            $data = $this->user_model->login($_POST);
            if (!empty($data)) {
                $sub_status = $this->user_model->is_subscribe($data);
                $this->session->userdata = $data;
                $this->user_model->is_online($data);
                if ($sub_status == 0) {
                    echo "<script>alert('Login to your account successfully Your 15 days free trail start from today!');window.location='../';</script>";
                } else {
                    echo "<script>alert('your Membership is over You need to buy a plan Today');window.location='../plan';</script>";
                }
            } else {
                echo "<script>alert('Not Valid'); window.location='../';</script>";
            }
        }
    }

    public function logout()
    {
        $this->user_model->is_offline($this->session->userdata['user_id']);
        $this->session->sess_destroy();
        echo "<script>alert('Sucess logout');window.location ='../';</script>";
    }
    public function del()
    {
        if (!empty($_FILES)) {
            print_r($_FILES);
            $post_field_name = $_FILES['test']['name'];
            $upload_path = base_url() . 'assets/user_profile/';
            fileUpload('test', $upload_path, '', $post_field_name);
        } else {
            $this->load->view('del');
            // echo "Ram";
        }
    }

}
