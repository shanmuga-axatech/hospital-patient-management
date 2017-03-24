<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model', 'register');
	}

	public function index($data=array())
	{		
		$data['patient_no'] = $this->register->get_next_patientno();
		$this->load->view('form/home', $data);		
	}
}