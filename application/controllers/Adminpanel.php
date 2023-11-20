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
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		// $cek = $this->model_auth->cek_login($u, $p)->row_array();
		// $result = $this->model_auth->cek_login_member($u, $p)->row_object();

		$user = $this->model_auth->get($username); // Panggil fungsi get yang ada di UserModel.php


		if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
			redirect('adminpanel'); // Redirect ke halaman login
		}else{
			if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
				$session = array(
					// 'authenticated'=>true, // Buat session authenticated dengan value true
					'username'=>$user->username,  // Buat session username
					'nama'=>$user->nama, // Buat session nama
					'role'=>$user->role // Buat session role
				);

				$this->session->set_userdata($session); // Buat session sesuai $session
				redirect('adminpanel/dashboard'); // Redirect ke halaman home
			}else{
				$this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
				redirect('adminpanel'); // Redirect ke halaman login
			}
		}


		// if($cek == true){
		// 		$data_session = array(
		// 			'id_user' => $result->id_user,
		// 			'username' => $u,
		// 			'password' => $p,
		// 			'status' => 'login'
				
		// 		);
		// 		$this->session->set_userdata($data_session);
		// 		redirect('adminpanel/dashboard');
		// }else{

		// } 
		
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
		$nama = $this->input->post('nama');
		
		$dataInput = array(
			'username'=>$username,
			'password'=>$password,
			'nama'=>$nama,
			'role'=>$role);

		$this->model_auth->insert('user', $dataInput);
		redirect('adminpanel/index');
	}

}