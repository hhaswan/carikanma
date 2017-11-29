<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends MX_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->model('M_perangkat');
		$this->load->helper(array('url','text','form'));
	}

	public function index()
	{

		$data = array(
			'title' => 'Dashboard | Carikanma',
			'titleku'=>'Dashboard',
			'active_dash'=>'active',
			//'ambil_data' => $this->M_perangkat->tampilData('tb_perangkat'),
			);

		$this->load->view('element/header',$data);
		$this->load->view('V_adm',$data);
		$this->load->view('element/footer');
	}
}
