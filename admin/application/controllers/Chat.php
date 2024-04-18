<?php

class Chat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('message_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$user_id = $this->session->userdata['user_data']['user_id'];
		$is_online = $this->session->userdata['user_data']['is_online'];
		$data['message'] = $this->message_model->getMessage($user_id);
		$data['chat_with'] = $this->user_model->get($user_id);

		$data['page_name'] = 'chat/index';
		$data['slug'] = 'chat';
		$data['receiver_id'] = $user_id;
		$this->load->view('chat/message', $data);
	}


	public function getalluser()
	{
		$user_id = $this->session->userdata['user_data']['user_id'];
		$is_online = $this->session->userdata['user_data']['is_online'];
		$data['message'] = $this->message_model->getMessage($user_id);
		$chat_data =  $this->message_model->chat_list($user_id);
		$newarray = [];
		$ids = array_column($chat_data, 'sender_id');
		$ids = array_unique($ids);
		$newarray = array_filter($chat_data, function ($key, $value) use ($ids) {
			return in_array($value, array_keys($ids));
		}, ARRAY_FILTER_USE_BOTH);

		
		$data['chat_with'] =  $newarray;
		$data['page_name'] = 'chat/list';
		$data['slug'] = 'chat';
		$data['receiver_id'] = $user_id;
		$this->load->view('chat/list', $data);
	}


	public function chat($sender_id)
	{
		$data['message'] = $this->message_model->getByuser(SENDER, $sender_id, $this->session->userdata['user_data']['user_id']);
		$data['chat_with'] = $this->user_model->get($sender_id)[0];
		$data['page_name'] = 'home/user_chat';
		$data['slug'] = 'chat';
		$data['receiver_id'] = $sender_id;
		$this->load->view('chat/index', $data);
	}

	public function send()
	{

		if (isset($_POST['message'])) {
			$_POST['sender_id'] = $this->session->userdata['user_data']['user_id'];
			$this->message_model->add($_POST);
			redirect('chat/chat/' . $_POST['reciver_id']);
		}
	}
}
