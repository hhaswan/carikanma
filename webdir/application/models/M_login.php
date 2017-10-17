<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function validate(){
		// grab user input
		$username = $this->security->xss_clean($this->input->post('uname_login'));
		$password = $this->security->xss_clean($this->input->post('pwd_login'));

		// Prep the query
		$this->db->where('in_uname', $username);
		$this->db->where('in_pwd', $password);

		// Run the query
		$query = $this->db->get('tb_in');
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
					'userid' => $row->userid,
					'fname' => $row->fname,
					'lname' => $row->lname,
					'username' => $row->username,
					'validated' => true
					);
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}
?>
