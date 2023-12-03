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
		// $id = $this->session->userdata('id_user');
        // $dataWhere = array('id_user' => $id);
        // $data['surat'] = $this->model_auth->get_by_id('tbl_surat', $dataWhere)->result();
        // $data['kategori'] = $this->model_auth->get_all_data('tbl_user')->result();

		$id = $this->session->userdata('id_user');
        $dataWhere = array('id_user' => $id);
        $get['penduduk']=$this->model_auth->get_by_id('tbl_surat', $dataWhere)->result();
        

        $data['surat'] = $this->model_auth->get_all_data('tbl_surat')->result();
		$data['penduduk'] = $this->model_auth->get_all_data('tbl_penduduk')->result();

		// join table
		$data['tampil_surat'] = $this->model_auth->join('tbl_surat', 'tbl_penduduk', 'tbl_surat.id_surat=tbl_penduduk.id_penduduk')->result();

		$this->load->view('adminDesa/layout/header');
		$this->load->view('adminDesa/surat/tampil', $data);
		$this->load->view('adminDesa/layout/footer');
	}

    public function add(){
        $id = $this->session->userdata('id_user');
        $dataWhere = array('id_user' => $id);
        // $dataPenduduk = array('id_penduduk' => $id);
        $data['surat'] = $this->model_auth->get_by_id('tbl_surat', $dataWhere)->row_object();
        // $data['cek'] = $this->model_auth->get_by_id('tbl_penduduk', $dataPenduduk)->row_object();
		$data['cek'] = $this->model_auth->join('tbl_user', 'tbl_penduduk', 'tbl_user.id_user=tbl_penduduk.id_penduduk')->result();
        
        $this->load->view('adminDesa/layout/header');
        $this->load->view('adminDesa/surat/formAdd', $data);
        $this->load->view('adminDesa/layout/footer');
    }

    public function save(){
		$id = $this->session->userdata('id_user');
		$nik = $this->input->post('nik');
		$jenis_surat = $this->input->post('jenis_surat');
		$keperluan = $this->input->post('keperluan');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');

		$dataInput = array(
			'id_user' => $id,
			'jenis_surat' => $jenis_surat,
			'keperluan' => $keperluan,
			'tanggal' => $tanggal,
			'status' => $status
		);
			$this->model_auth->insert('tbl_surat',$dataInput);
			redirect('surat/index');
    }

}