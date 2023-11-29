<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_auth');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('auth/masuk_header');
        $this->load->view('admin/login');
		$this->load->view('auth/masuk_footer');
	}

	//klik login 
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$cek = $this->model_auth->cek_login_admin($username, $password)->num_rows();
		$result = $this->model_auth->cek_login_admin($username, $password)->row_object();

		if ($cek == 1) {
			$data_session = array(
				'id_admin' =>  $result->id_admin,
				'username' => $username,
				'password' => $password,
				'nama' => $result->nama,
			);
			$this->session->set_userdata($data_session);
			redirect('admin/admin');
		} else {
			redirect('admin/index');
		}
	}

	//register
	public function register()
	{
		$data['kategori'] = $this->model_auth->get_all_data('tbl_admin')->result();
		$this->load->view('auth/masuk_header');
		$this->load->view('admin/register');
		$this->load->view('auth/masuk_footer');
	}

	//klik register
	public function regis(){
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		
		
		$dataInput = array(
			'username'=>$username,
			'password'=>$password,
			'nama'=>$nama,
		);

		$this->model_auth->insert('tbl_admin', $dataInput);
		redirect('admin/index');
	}

	//logout
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/index');
	}

	//tampil halaman login
	public function admin(){
		if(empty($this->session->userdata('id_admin'))){
			redirect('admin/index');
		}

		$this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/footer');
	}

	//tampil data user
	public function tampil_user(){	
		if(empty($this->session->userdata('id_admin'))){
			redirect('admin/index');
		}

		$data['user'] = $this->model_auth->get_all_data('tbl_transaksi')->result();
		$this->load->view('admin/layout/header');
        $this->load->view('admin/user/tampil', $data);
		$this->load->view('admin/layout/footer');
	}
}