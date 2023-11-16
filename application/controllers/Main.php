<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('landingPage/layout/header');
		$this->load->view('landingPage/layout/menu');
		$this->load->view('landingPage/layout/footer');
	}

	public function login()
	{
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
        // Jika validasi form gagal, tampilkan kembali halaman login dengan pesan error
        $this->load->view('templates/masuk_header');
        $this->load->view('auth/login');
        $this->load->view('templates/masuk_footer');
    } else {
        // Jika validasi form berhasil
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $main = $this->model_auth->cek_login($username, $password);

        if ($main == FALSE) {
            // Jika login gagal, tampilkan pesan error
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('auth/login');
        } else {
            // Jika login berhasil, set session dan redirect sesuai role
            $this->session->set_userdata('username', $main->username);
            $this->session->set_userdata('role_id', $main->role_id);

            switch ($main->role_id) {
                case 1:
                    redirect('adminpanel/index');
                    break;
                case 2:
                    redirect('adminpanel');
                    break;
                default:
                    break;
            }
        }
    }
}

    public function registration()
	{
		$this->form_validation->set_rules('desa', 'Desa', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|valid_email');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password');
		if ($this->form_validation->run() == false){
        $this->load->view('templates/masuk_header');
		$this->load->view('auth/registration');
        $this->load->view('templates/masuk_footer');
		} else {
			echo 'data berhasil ditambahkan!';
		}
	}

}