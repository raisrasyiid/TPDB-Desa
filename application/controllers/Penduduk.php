<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('model_auth');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if(empty($this->session->userdata('username'))){
			redirect('adminpanel/index');
		}
		$data['penduduk']=$this->model_auth->get_all_data('kependudukan')->result();
		$this->load->view('adminDesa/layout/header');
		$this->load->view('adminDesa/penduduk/tampil', $data);
		$this->load->view('adminDesa/layout/footer');
	}

	//tampil add
	public function add(){
		$this->load->view('adminDesa/layout/header');
		$this->load->view('adminDesa/penduduk/formAdd');
		$this->load->view('adminDesa/layout/footer');
	}

}