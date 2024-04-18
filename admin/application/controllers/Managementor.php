<?php

class Managementor extends CI_Controller
{
    public $role_id = 2;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('role_model');
    }

    public function index()
    {
        $data['page_name'] = 'managementor/index';
        $data['slug'] = 'manage-mentor ';
        $data['page_heading'] = "Manage Mentor";
        $id = 2;
        $data['result'] = $this->user_model->get($this->role_id);
        $this->load->view('include/template', $data);
    }

    public function add()
    {
        if (isset($_POST['sub'])) {
            $data = ['full_name' => $_POST['full_name'], 'username' => $_POST['username'], 'email' => $_POST['username'], 'password' => $_POST['password'], 'role_id' => $_POST['role_id']];
            $this->user_model->add($data);
            redirect('managementor/index');
        } else {
            $data['page_name'] = 'managementor/add';
            $data['page_heading'] = 'ADD MENTOR';
            $data['slug'] = 'manage-mentor / add /';
            $data['result'] = $this->user_model->get($this->role_id);
            $this->load->view('include/template', $data);
        }
    }

    public function edit($user_id = "")
    {
        if (isset($_POST['sub'])) {
            //$item_arr = ['username', 'password', 'role_id', 'about_user', 'full_name', 'email'];
            $data = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'role_id' => $_POST['role_id'],
                'about_user' => $_POST['about_user'],
                'full_name' => $_POST['full_name'],
                'email' => $_POST['username'],
                'user_id' => $user_id,
            ];
            $this->user_model->update($data);
            redirect('managementor/index');
        } else {
            $data['page_name'] = 'managementor/edit';
            $data['page_heading'] = 'EDIT MENTOR DETAILS';
            $data['slug'] = 'manage-mentor / edit /';
            $data['row'] = $this->user_model->get_single($user_id);
            $this->load->view('include/template', $data);
        }
    }

    public function delete($user_id)
    {
        $this->user_model->delete($user_id);
        redirect('managementor/index');
    }

}
