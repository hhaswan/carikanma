<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_home');
		$this->load->helper(array('url','text','form'));
	}

	public function index()
	{

		$data = array(
			'title' => 'Home | Carikanma',
			'titleku'=>'Home',
			'ambil_data' => $this->M_home->tampilData('produk'),
			);

		$this->load->view('element/header_home',$data);
		$this->load->view('V_home',$data);
		$this->load->view('element/footer_home');
	}

}
