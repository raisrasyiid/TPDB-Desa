<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	// controller landing page promosi
	public function index()
	{
		$this->load->view('landingPage/layout/header');
		$this->load->view('landingPage/layout/menu');
		$this->load->view('landingPage/layout/footer');
	}

}