<?php 

class manageroles extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('role_model');
        $this->load->model('student_model');
        
        
    }
    public function index(){
        $data['slug']= 'manage-roles';
        $data['page_name']='manageroles/index';
        $data['page_heading']='Manage Roles';
        $data['result']= $this->role_model->get();
        $this->load->view('include/template',$data);
    }

    public function add(){
        if(isset($_POST['sub'])){
            $this->role_model->add($_POST);
            redirect('manageroles/index');
        }else{
            $data['page_name']='manageroles/add';
            $data['page_heading']='ADD NEW ROLE';
            $data['result']=$this->role_model->get();
            $data['slug']='manageroles/add';
            $this->load->view('include/template',$data);
        }
    }
    public function edit($role_id=""){
        if(isset($_POST['sub'])){
            $this->role_model->update($_POST);
            redirect('manageroles/index');
        }else{
            $data['page_name']='manageroles/edit';
            $data['page_heading']='MANAGE ROLES';
            $data['slug']='manageroles/ edit';
            $data['row']=$this->role_model->get($role_id);
            $this->load->view('include/template',$data);
        }
    }
    public function get(){
        return $this->role_model->get();
    }
    public function delete($id){
        $this->role_model->delete($id);
        redirect('manageroles/index');
        
    }
}


?>
