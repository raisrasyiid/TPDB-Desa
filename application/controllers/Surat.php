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

        $data['surat'] = $this->model_auth->get_all_data('tbl_surat')->result();
		$data['user'] = $this->model_auth->get_all_data('tbl_user')->result();
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
        $data['surat'] = $this->model_auth->get_by_id('tbl_surat', $dataWhere)->row_object();
        
        $this->load->view('adminDesa/layout/header');
        $this->load->view('adminDesa/surat/formAdd', $data);
        $this->load->view('adminDesa/layout/footer');
    }

    public function save(){
		$id = $this->session->userdata('id_user');
		$jenis_surat = $this->input->post('jenis_surat');
		$keperluan = $this->input->post('keperluan');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');

		$dataInput=array(
			'id_user' => $id,
			'nik'=>$nik,
			'nama'=>$nama,
			'jenis_kelamin'=>$jenKel,
			'tempat_lahir'=>$tmptLahir,
			'tanggal_lahir'=>$tglLahir,
			'agama'=>$agama,
			'alamat'=>$alamat,
		);
			$this->model_auth->insert('tbl_penduduk',$dataInput);
			redirect('penduduk/index');
    }

}