<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_auth');
		$this->load->library('form_validation');
	}

	//tampil halaman login
	public function admin(){
		$this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/footer');
	}
}