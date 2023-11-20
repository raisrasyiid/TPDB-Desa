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

	//tampil add
	public function add(){

		$this->load->view('adminDesa/layout/header');
		$this->load->view('adminDesa/penduduk/formAdd');
		$this->load->view('adminDesa/layout/footer');
	}

	//aksi tambah 
	public function save(){
		if(empty($this->session->userdata('username'))){
			redirect('adminpanel/index');
		}
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenKel = $this->input->post('jenis_kelamin');
		$tmptLahir = $this->input->post('tempat_lahir');
		$tglLahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status_perkawinan');
		$alamat = $this->input->post('alamat');

		$dataInput=array(
			'nik'=>$nik,
			'nama'=>$nama,
			'jenis_kelamin'=>$jenKel,
			'tempat_lahir'=>$tmptLahir,
			'tanggal_lahir'=>$tglLahir,
			'agama'=>$agama,
			'status_perkawinan'=>$status,
			'alamat'=>$alamat,
		);
			$this->model_auth->insert('kependudukan',$dataInput);
			redirect('penduduk/index');
    }

	//tampil edit
	public function get_by_id($id){
		if(empty($this->session->userdata('username'))){
			redirect('adminpanel/index');
		}
		$dataWhere = array('nik'=>$id);
		$data['penduduk'] = $this->model_auth->get_by_id('kependudukan', $dataWhere)->row_object();
		$this->load->view('adminDesa/layout/header');
		$this->load->view('adminDesa/penduduk/formEdit', $data);
		$this->load->view('adminDesa/layout/footer');
	}

	//aksi edit
	public function edit(){
		if(empty($this->session->userdata('username'))){
			redirect('adminpanel/index');
		}

		$id = $this->input->post('id_penduduk');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenKel = $this->input->post('jenis_kelamin');
		$tmptLahir = $this->input->post('tempat_lahir');
		$tglLahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status_perkawinan');
		$alamat = $this->input->post('alamat');

		$dataInput=array(
			'nik'=>$nik,
			'nama'=>$nama,
			'jenis_kelamin'=>$jenKel,
			'tempat_lahir'=>$tmptLahir,
			'tanggal_lahir'=>$tglLahir,
			'agama'=>$agama,
			'status_perkawinan'=>$status,
			'alamat'=>$alamat,
		);
		$this->Madmin->update('kependudukan', $dataUpdate, 'id_penduduk', $id);
			redirect('penduduk/index');


	}

	//delete
	public function delete($id){
		if(empty($this->session->userdata('username'))){
			redirect('adminpanel/index');
		}
		$this->model_auth->delete('kependudukan', 'id_penduduk', $id);
		redirect('penduduk/index');
	}
	
	

}