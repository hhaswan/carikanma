<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class In extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_home');
		$this->load->helper(array('url','text','form'));
	}

	public function index()
	{
		$data = array(
			'title' => 'Login | Carikanma',
			'titleku'=>'Login',
			//'ambil_data' => $this->M_home->tampilData('tb_home'),
			);

		//$this->load->view('element/header',$data);
		$this->load->view('V_in',$data);
		$this->load->view('element/footer');
	}

}
