<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

	public function index()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/artikel/tampil');
		$this->load->view('admin/layout/footer');
	}
}