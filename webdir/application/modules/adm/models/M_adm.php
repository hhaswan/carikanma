<?php

class M_adm extends CI_Model {

public function tambahData($table,$data) {
		$this->db->insert($table, $data);
	}

public function tampilData($table){
    return $this->db->get($table)->result();
  }

public function updateData($table,$data,$field_key){
    $this->db->update($table,$data,$field_key);
  }

public function deleteData($table,$data){
    $this->db->delete($table,$data);
  }

public function getEditdata($id){
	$this->db->where('id_produk',$id);
	$query=$this->db->get('produk');
	return $query->result();
  }

}

?>
