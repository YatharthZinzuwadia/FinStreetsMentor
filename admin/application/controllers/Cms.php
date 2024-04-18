<?php
class Cms extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('cms_model');
    }
    public function about(){
        if(isset($_POST['sub'])){
            $updateData['info'] = $_POST['info'];
            $updateData['is_active'] = 1;
            $this->cms_model->update($updateData);
        }
        $data['page_name'] = 'about/index';
        $data['slug'] = 'manage-about-info';
        $data['row'] = $this->cms_model->get('about_info','1');
        $this->load->view('include/template', $data);
    }
}