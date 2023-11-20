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

	// public function index(){
	// 	if(empty($this->session->userdata('userName'))){
	// 		redirect('adminpanel');
	// 	}
	// 	$data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
	// 	$this->load->view('admin/layout/header');
	// 	$this->load->view('admin/layout/menu');
	// 	$this->load->view('admin/kategori/tampil', $data);
	// 	$this->load->view('admin/layout/footer');
	// }
}