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
		$id = $this->session->userdata('id_user');
        $dataWhere = array('id_user' => $id);
        $data['penduduk']=$this->model_auth->get_by_id('tbl_penduduk', $dataWhere)->result();
        
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
		$id = $this->session->userdata('id_user');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenKel = $this->input->post('jenis_kelamin');
		$tmptLahir = $this->input->post('tempat_lahir');
		$tglLahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');

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

	//tampil edit
	public function get_by_id($id){
		if(empty($this->session->userdata('id_user'))){
			redirect('adminpanel/index');
		}
		$dataWhere = array('nik'=>$id);
		$data['penduduk'] = $this->model_auth->get_by_id('tbl_penduduk', $dataWhere)->row_object();
		$this->load->view('adminDesa/layout/header');
		$this->load->view('adminDesa/penduduk/formEdit', $data);
		$this->load->view('adminDesa/layout/footer');
	}

	//aksi edit

	public function edit(){
		$id = $this->input->post('id_penduduk');
		$id_usr = $this->session->userdata('id_user');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenKel = $this->input->post('jenis_kelamin');
		$tmptLahir = $this->input->post('tempat_lahir');
		$tglLahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');

		$dataUpdate = array(
			'id_user' => $id_usr,
			'nik'=>$nik,
			'nama'=>$nama,
			'jenis_kelamin'=>$jenKel,
			'tempat_lahir'=>$tmptLahir,
			'tanggal_lahir'=>$tglLahir,
			'agama'=>$agama,
			'alamat'=>$alamat,
		);
		$this->model_auth->update('tbl_penduduk', $dataUpdate, 'id_penduduk', $id);
			redirect('penduduk/index');


	}

	//delete
	public function delete($id){
        $this->model_auth->delete('tbl_penduduk', 'id_penduduk', $id);
        redirect('penduduk/index');
    }

	
	

}