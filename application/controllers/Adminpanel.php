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
}