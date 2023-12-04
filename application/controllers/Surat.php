<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('model_auth');
	}

	public function index()
    {
    $id = $this->session->userdata('id_user');
    $dataWhere = array('id_user' => $id);
    $get['surat'] = $this->model_auth->get_by_id('tbl_surat', $dataWhere)->result();

    // Ambil data dari tbl_surat
    $data['surat'] = $this->model_auth->get_all_data('tbl_surat')->result();

    // Ambil data dari tbl_penduduk
    $data['penduduk'] = $this->model_auth->get_all_data('tbl_penduduk')->result();

    // Join tbl_surat dengan tbl_penduduk berdasarkan kunci yang sesuai
    $data['tampil_surat'] = $this->model_auth->join('tbl_surat', 'tbl_penduduk', 'tbl_surat.id_penduduk=tbl_penduduk.id_penduduk')->result();

    $this->load->view('adminDesa/layout/header');
    $this->load->view('adminDesa/surat/tampil', $data);
    $this->load->view('adminDesa/layout/footer');
}
	
public function add(){
    $data['penduduk'] = $this->model_auth->get_all_data('tbl_penduduk')->result();

    $this->load->view('adminDesa/layout/header');
    $this->load->view('adminDesa/surat/formAdd', $data);
    $this->load->view('adminDesa/layout/footer');
}

public function save(){
    $id_user = $this->session->userdata('id_user');
    $jenis_surat = $this->input->post('jenis_surat');
    $keperluan = $this->input->post('keperluan');
    $tanggal = $this->input->post('tanggal');
    $status = $this->input->post('status');
    $id_penduduk = $this->input->post('id_penduduk'); 
    
    $is_valid_penduduk = $this->model_auth->get_by_id('tbl_penduduk', array('id_penduduk' => $id_penduduk))->row();

    if(!$is_valid_penduduk) {
        echo "Data penduduk dengan ID $id_penduduk tidak valid.";
        return;
    }

    $dataInput = array(
        'id_user' => $id_user,
        'jenis_surat' => $jenis_surat,
        'keperluan' => $keperluan,
        'tanggal' => $tanggal,
        'status' => $status,
        'id_penduduk' => $id_penduduk 
    );

    $this->model_auth->insert('tbl_surat', $dataInput);
    redirect('surat/index');
}


	public function get_by_id($id_penduduk) {
		if (empty($this->session->userdata('id_user'))) {
			redirect('adminpanel/index');
		}
		
		// Ambil data dari tabel tbl_surat berdasarkan id_penduduk
		$dataWhere = array('id_penduduk' => $id_penduduk);
		$data['surat'] = $this->model_auth->get_by_id('tbl_surat', $dataWhere)->row_object();
	
		if (!$data['surat']) {
			echo "Data surat untuk penduduk dengan ID $id_penduduk tidak ditemukan."; 
			return;
		}
	
		$this->load->view('adminDesa/layout/header');
		$this->load->view('adminDesa/surat/formEdit', $data);
		$this->load->view('adminDesa/layout/footer');
	}
	

	public function update(){
		$id_surat = $this->input->post('id_surat'); 
	
		$id_user = $this->session->userdata('id_user');
		$jenis_surat = $this->input->post('jenis_surat');
		$keperluan = $this->input->post('keperluan');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');
	
		$dataUpdate = array(
			'id_user' => $id_user,
			'jenis_surat' => $jenis_surat,
			'keperluan' => $keperluan,
			'tanggal' => $tanggal,
			'status' => $status,
		);
	
		$this->model_auth->update('tbl_surat', $dataUpdate, 'id_surat', $id_surat);
	
		redirect('surat/index');
	}
	
	//delete
	public function delete($id_surat){
        $this->model_auth->delete('tbl_surat', 'id_surat', $id_surat);
        redirect('surat/index');
    }
}