<?php
class Model_auth extends CI_Model{

  //login
    public function cek_login($u, $p){
		$q = $this->db->get_where('user', array('username'=>$u, 'password'=>$p));
		return $q;
	}

	public function get($username){
        $this->db->where('username', $username);
        $result = $this->db->get('user')->row(); 

        return $result;
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

	//get by id
	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	//update data
	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	//delete data
	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val)); 
	}

	//detail penduduk
	public function detail($id = NULL)
	{
		$query = $this->db->get_where('kependudukan', array('nik' => $id))->row_array();
		return $query;
	}

}
