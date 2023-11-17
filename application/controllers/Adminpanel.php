<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_auth');
		$this->load->library('form_validation');
	}

	//tampil halaman login
	public function index(){
		$this->load->view('auth/masuk_header');
        $this->load->view('auth/login');
		$this->load->view('auth/masuk_footer');
	}

	//klik login 
	public function login(){
		$this->load->model('model_auth');
		$u= $this->input->post('username');
		$p= $this->input->post('password');
		
		$cek = $this->model_auth->cek_login($u, $p)->row_array();
		$result = $this->model_auth->cek_login_member($u, $p)->row_object();
		if($cek == true){
				$data_session = array(
					'id_user' => $result->id_user,
					'username' => $u,
					'password' => $p,
					'status' => 'login'
				
				);
				$this->session->set_userdata($data_session);
				redirect('adminpanel/dashboard');
		}else{

		} 
		
	}
	
	//halaman dashboard admin
	public function dashboard()
	{
		if(empty($this->session->userdata('username'))){
			redirect('adminpanel/index');
		}
		$this->load->view('adminDesa/layout/header');
        $this->load->view('adminDesa/layout/menu');
        $this->load->view('adminDesa/layout/footer');
	}

	//logout
	public function logout(){
		$this->session->sess_destroy();
		redirect('adminpanel/index');
	}

	//tampil halaman register
	public function register()
	{
		$data['kategori'] = $this->model_auth->get_all_data('user')->result();
		$this->load->view('auth/masuk_header');
		$this->load->view('auth/register');
		$this->load->view('auth/masuk_footer');
	}

	//klik register
	public function regis(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');
		
		$dataInput = array(
			'username'=>$username,
			'password'=>$password,
			'role'=>$role);

		$this->model_auth->insert('user', $dataInput);
		redirect('adminpanel/index');
	}



	// public function regis()
	// {
	// 	$this->form_validation->set_rules('desa', 'Desa', 'required|trim');
	// 	$this->form_validation->set_rules('nama', 'Nama', 'required|trim|valid_email');
	// 	$this->form_validation->set_rules('email', 'Email', 'required|trim');
	// 	$this->form_validation->set_rules('password');
	// 	if ($this->form_validation->run() == false){
	// 		$this->load->view('adminDesa/layout/header');
	// 		$this->load->view('adminDesa/layout/menu');
	// 		$this->load->view('adminDesa/layout/footer');
	// 		} else {
	// 		echo 'data berhasil ditambahkan!';
	// 	}
	// }
}