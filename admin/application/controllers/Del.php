<?php
class Del extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('city_model');
    }
    public function test(){
        echo "Ram";
        echo "<pre>";
        print_r($this->session);
        echo "</pre>";
        $this->session->unset_userdata('user_data');
        $this->session->sess_destroy();
        echo "<pre>";
        print_r($this->session);
        echo "</pre>";
    }
    public function add(){
        $_POST = ['cname'=>'Rajkot','sid'=>'1','abv'=>21212];
        
        $this->city_model->add($_POST);
    }
    public function edit(){
        $_POST = ['cname'=>'Talala','sid'=>'1','cid'=>5];
        
        $this->city_model->update($_POST);
    }
    public function get(){
        $data = $this->city_model->get();
        echo"<pre>";
        print_r($data);
        echo"</pre>";
    }
    public function getSingle(){
        $data = $this->city_model->getSingle();
        echo"<pre>";
        print_r($data);
        echo"</pre>";
    }
    public function delete(){
        $this->city_model->delete(1);
    }
}


