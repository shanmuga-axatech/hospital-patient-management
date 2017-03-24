<?php

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model', 'register');
	}

	public function index($data = array())
	{
		$this->load->view('temp/header');
		$this->load->view('form/register', $data);
		$this->load->view('temp/footer');
	}

	public function save()
	{
		$params = $this->input->post();
		$data = $this->register->save($params);
		if($data['status']) {
			$this->session->set_userdata($data['data']);
		}
		$this->index($data);
	}
}