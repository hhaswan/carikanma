<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_crud extends CI_Model {

	public function tambahData($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}

	public function editData($table_name,$data,$id){
		$this->db->where('id_produk',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}

	public function hapusData($table_name,$id){
		$this->db->where('id_produk',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}

	public function dataEdit($table_name,$id)
	{
		$this->db->where('id_produk',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
}