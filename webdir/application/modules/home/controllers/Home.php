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
			'title' => 'Home | DOC',
			'titleku'=>'Home',
			//'ambil_data' => $this->M_home->tampilData('tb_home'),
			);

		//$this->load->view('element/header',$data);
		$this->load->view('V_home',$data);
		//$this->load->view('element/footer');
	}

	public function register()
	{

		$data = array(
			'title' => 'Register | Carikanma',
			'titleku'=>'Register',
			//'ambil_data' => $this->M_home->tampilData('tb_home'),
			);

		//$this->load->view('element/header',$data);
		$this->load->view('V_register',$data);
		//$this->load->view('element/footer');
	}

}
