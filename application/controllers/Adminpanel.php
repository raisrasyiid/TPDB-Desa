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
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$namadesa = $this->input->post('namadesa');
		
		$cek = $this->model_auth->cek_login($username, $password)->num_rows();
		$result = $this->model_auth->cek_login($username, $password)->row_object();

		if ($cek == 1) {
			$data_session = array(
				'id_user' =>  $result->id_user,
				'username' => $username,
				'password' => $password,
				'nama_desa' => $namadesa,
			);

			$insert_transaksi = array(
				'id_user' =>  $result->id_user,
				'status_pembayaran' => 'belum bayar',
				'tenggat_waktu' => date('Y-m-d'),
				'status' => 'N',
			);

			$this->session->set_userdata($data_session);
			$this->model_auth->insert('tbl_transaksi', $insert_transaksi);
			redirect('adminpanel/dashboard');

			// if ($this->model_auth->isUserActive($username)) {
			// }
			// $dataWhere = array('id_user', $id);
			// $data = $this->model_auth->get_by_id('tbl_transaksi', $dataWhere)->result();
			// if($data ->status == 'N'){
			// 	redirect('adminpanel/index');
			// }else{
			// redirect('adminpanel/dashboard');
			// }
		} else {
			redirect('adminpanel/index');
		}

		// $user = $this->model_auth->get($username); 


		// if(empty($user)){ 
		// 	$this->session->set_flashdata('message', 'Username tidak ditemukan'); 
		// 	redirect('adminpanel'); // Redirect ke halaman login
		// }else{
		// 	if($password == $user->password){ 
		// 		$session = array(
		// 			'authenticated'=>true, 
		// 			'username'=>$user->username,  
		// 			'nama'=>$user->nama, 
		// 			'role'=>$user->role 
		// 		);

		// 		$this->session->set_userdata($session); 
		// 		redirect('adminpanel/dashboard');
		// 	}else{
		// 		$this->session->set_flashdata('message', 'Password salah');
		// 		redirect('adminpanel'); 
		// 	}
		// }

		
	}
	
	//halaman dashboard admin
	public function dashboard()
	{
		$id = $this->session->userdata('id_user');
		$dataWhere = array('id_user'=>$id);
		$cek = $this->model_auth->get_by_id('tbl_transaksi', $dataWhere)->row_object();
		if($cek->status_pembayaran == 'belum bayar' || $cek->status == 'N'){
			redirect('adminpanel/index');
		}else{
		$this->load->view('adminDesa/layout/header');
        $this->load->view('adminDesa/layout/menu');
        $this->load->view('adminDesa/layout/footer');
		}
	}

	//logout
	public function logout(){
		$this->session->sess_destroy();
		redirect('adminpanel');
	}

	//tampil halaman register
	public function register()
	{
		$data['kategori'] = $this->model_auth->get_all_data('tbl_user')->result();
		$this->load->view('auth/masuk_header');
		$this->load->view('auth/register');
		$this->load->view('auth/masuk_footer');
	}

	//klik register
	public function regis(){
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$namadesa = $this->input->post('namadesa');
		
		
		$dataInput = array(
			'username'=>$username,
			'password'=>$password,
			'nama_desa'=>$namadesa,
		);
		
		// $dataInputTransaksi = array(
		// 	'id_user' => $result->id_user,
		// 	'status'=>'N',
		// );

		$this->model_auth->insert('tbl_user', $dataInput);
		// $this->model_auth->insert('tbl_transaksi', $dataInputTransaksi);
		redirect('adminpanel/index');
	}

}