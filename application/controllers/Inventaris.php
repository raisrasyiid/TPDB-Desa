<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventaris extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_auth');
		$this->load->library('form_validation');
	}

	public function index(){

        $id = $this->session->userdata('id_user');
        $dataWhere = array('id_user' => $id);
        $data['inventaris']=$this->model_auth->get_by_id('tbl_inventaris', $dataWhere)->result();

        $this->load->view('adminDesa/layout/header');
		$this->load->view('adminDesa/inventaris/tampil',$data);
		$this->load->view('adminDesa/layout/footer');
	}

		//tampil add
		public function add(){
			$data['id_user']=$id_user;
			// $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();

			$this->load->view('adminDesa/layout/header');
			$this->load->view('adminDesa/inventaris/formAdd', $data);
			$this->load->view('adminDesa/layout/footer');
		}

		public function save(){
			$id = $this->session->userdata('id_user');	
			$nama = $this->input->post('nama');
			$jumlah = $this->input->post('jumlah');
			$keadaan = $this->input->post('keadaan');

	
			$config['upload_path'] = './gambar/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$data_file = $this->upload->data();
				$data_insert = array(
					'id_user'=>$id,
					'nama'=>$nama,
					'jumlah'=>$jumlah,
					'keadaan'=> $keadaan,
					'gambar'=>$data_file['file_name'],
				);
				$this->model_auth->insert('tbl_inventaris', $data_insert);
				redirect('inventaris/index/');
			} else {
				redirect('inventaris/add/');
			}
		}
}