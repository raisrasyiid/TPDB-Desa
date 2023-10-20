<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{

	public function index()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/penduduk/tampil');
		$this->load->view('admin/layout/footer');
	}
}