<?php
class Model_auth extends CI_Model{

  //login
    public function cek_login($u, $p){
		$q = $this->db->get_where('user', array('username'=>$u, 'password'=>$p));
		return $q;
	}

  //get all data
  public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

  //insert data
  public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

  public function cek_login_member($u, $p){
		$q = $this->db->get_where('user', array('username'=>$u, 'password'=>$p));
		return $q;
	}

}
