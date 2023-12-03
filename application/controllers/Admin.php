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

		// $data['transaksi'] = $this->model_auth->get_all_data('tbl_transaksi')->result();
		// $data['admin'] = $this->model_auth->get_all_data('tbl_admin')->result();
		// $data['user'] = $this->model_auth->get_all_data('tbl_user')->result();

		// join table
		// $data['tampil_admin'] = $this->model_auth->join('tbl_transaksi', 'tbl_user', 'tbl_transaksi.id_transaksi=tbl_user.id_user')->result();

		$data['tampil_admin'] = $this->model_auth->get_all_data('tbl_transaksi')->result();
		$this->load->view('admin/layout/header');
        $this->load->view('admin/user/tampil', $data);
		$this->load->view('admin/layout/footer');
	}

	public function ubah_status($id)
    {
        if (empty($this->session->userdata('id_admin'))) {
            redirect('admin/index');
        }
        $dataWhere = array('id_transaksi' => $id);
        $result = $this->model_auth->get_by_id('tbl_transaksi', $dataWhere)->row_object();
        $status = $result->status;
        if ($status == "Y") {
            $dataUpdate = array('status' => "N", 'status_pembayaran' => 'belum bayar');
        } else {
            $dataUpdate = array('status' => "Y", 'status_pembayaran' =>'sudah bayar');
        }
        $this->model_auth->update('tbl_transaksi', $dataUpdate, 'id_transaksi', $id);
        redirect('admin/tampil_user');
    }

	public function delete($id, $idToko){
		if (empty($this->session->userdata('id_admin'))) {
            redirect('admin/index');
        }
        $this->model_auth->delete('tbl_transaksi', 'id_user', $id);
        redirect('admin/tampil_user');
    }

}