<?php

class Temp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('temp/home.php');
	}

	public function register()
	{
		$this->load->view('temp/register.php');
	}





}