<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{

	public function index()
	{
		$this->load->view('adminDesa/layout/header');
        $this->load->view('adminDesa/layout/menu');
        $this->load->view('adminDesa/layout/footer');
	}

	public function registration()
	{
		// $this->form_validation->set_rules('desa', 'Desa', 'required|trim');
		// $this->form_validation->set_rules('nama', 'Nama', 'required|trim|valid_email');
		// $this->form_validation->set_rules('email', 'Email', 'required|trim');
		// $this->form_validation->set_rules('password');
		// if ($this->form_validation->run() == false){
        $this->load->view('templates/masuk_header');
		$this->load->view('auth/registration');
        $this->load->view('templates/masuk_footer');
		// } else {
		// 	echo 'data berhasil ditambahkan!';
		// }
	}
}