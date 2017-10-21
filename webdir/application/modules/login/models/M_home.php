<?php

class M_home extends CI_Model {

// Insert json data into database
public function tambahData($table,$json_data) {
		$this->db->insert($table, $json_data);
		/*
		if ($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
      */
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
	$this->db->where('home_id',$id);
	$query=$this->db->get('tb_home');
	return $query->result();
//echo $id;
  //  return $query;
  }

}

?>
