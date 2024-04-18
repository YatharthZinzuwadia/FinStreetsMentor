<?php 

class Managestate extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('state_model');
    }

        public function index(){
        $data['page_name']='managestate/index';
        $data['slug']='Manage-state';
        $data['result']= $this->state_model->get();
        $this->load->view('include/template',$data);
                
}
    public function add(){
        if(isset($_POST['sub'])){
            $this->state_model->add($_POST);
            redirect('managestate/index');
        }else{
        $data['page_heading']='ADD STATE';    
        $data['page_name']='managestate/add';
        $data['sname']= $this->state_model->get();
        $data['slug']='Manage-state / add ';
        $this->load->view('include/template',$data);
        
    }}
    public function edit($state_id){
            if(isset($_POST['sub'])){
                $this->state_model->update($_POST);
                redirect('managestate/index');
        }else{
            $data['page_name']='managestate/edit';
            $data['slug']='manage-state';
            $data['page_heading']='manage-state';
            $data['row']=$this->state_model->get($state_id);
            $this->load->view('include/template',$data);
            
    }}
        
    public function delete($sid){
        $this->state_model->delete($sid); 
        redirect('managestate/index');
    }
    
    

}

?>