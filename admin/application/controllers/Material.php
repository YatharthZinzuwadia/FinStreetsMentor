<?php

class Material extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Material_model');
		$this->load->model('Mentor_model');
		$this->load->model('Course_model');
		$this->load->model('Courseusrmap_model');
	}

	public function index()
	{
		$data['page_name'] = 'material/index';
		$data['slug'] = 'manage-material';
		$data['result'] = $this->Material_model->get();
		$this->load->view('include/template', $data);
	}

	public function add()
	{
		if (isset($_POST['sub'])) {
			$userId = $_POST['menter_id'];
			$courseId = $_POST['course_id'];
			$this->load->helper('fileupload_helper');
			$image_filed_name = 'material_file';
			$post_field_name = 'material_file';
			$upload_path = '../assets/images/material_file/';
			$redirect_on = 'material/add';
			fileUpload($image_filed_name, $upload_path, $redirect_on, $post_field_name);
			$this->Material_model->add($_POST);
			$countMap = $this->db->query("SELECT * FROM `course_user_map` WHERE course_id = " . $userId . " AND user_id =" . $courseId)->num_rows();
			if ($countMap == 0) {
				$data = ["course_id" => $courseId, "user_id" => $userId];
				$this->Courseusrmap_model->add($data);
			}
			$this->session->set_flashdata('success', 'Image uploaded successfully');
			redirect('material/index');
		} else {
			$data['page_name'] = 'material/add';
			$data['slug'] = 'manage-material-image';
			$data['page_heading'] = 'Add New Material';
			$data['menter_list'] = $this->Mentor_model->get();
			$data['course_list'] = $this->Course_model->get();
			$this->load->view('include/template', $data);
		}
	}

	public function edit($material_id = "")
	{

		if (isset($_POST['sub'])) {
			if (!empty($_FILES['material_file']['name'])) {
				$this->load->helper('fileupload_helper');
				$image_filed_name = 'material_file';
				$post_field_name = 'image_name';
				$upload_path = '../assets/images/material_file/';
				$redirect_on = 'material/edit/' . $material_id;
				fileUpload($image_filed_name, $upload_path, $redirect_on, $post_field_name);
				unlink($upload_path . $_POST['current_image']);
			} else {
				$_POST['image_name'] = "";
			}
			$this->Material_model->update($_POST);
			redirect('material/index');
		} else {
			$data['row'] = $this->Material_model->get($material_id);
			$data['page_name'] = 'material/edit';
			$data['slug'] = 'manage-material';
			$data['page_heading'] = 'Update course';
			$this->load->view('include/template', $data);
		}
	}

	public function delete($material_id, $image_name)
	{
		$upload_path = '../assets/images/material_file/';
		unlink($upload_path . $image_name);
		$this->Material_model->delete($material_id);
		redirect('material/index');
	}

	public function del()
	{
		$this->load->helper('fileupload_helper');
		abc();
	}

	public function sold()
	{
		$data['page_name'] = 'material/sold';
		$data['slug'] = 'sold-material';
		$userId= $this->session->userdata('user_data')['user_id'];
		$data['result'] = $this->Material_model->get($userId);
		$this->load->view('include/template', $data);
	}
}
