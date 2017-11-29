<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umkm extends MX_Controller {

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
			'ambil_data' => $this->M_home->tampilData('view_umkm'),
			);

		$this->load->view('element/header',$data);
		$this->load->view('V_umkm',$data);
		$this->load->view('element/footer');
	}

	public function add_umkm()
	{

		$data = array(
			'title' => 'Home | Carikanma',
			'titleku'=>'Home',
			'ambil_data' => $this->M_home->tampilData('produk'),
			);

		$this->load->view('element/header',$data);
		$this->load->view('V_add-umkm',$data);
		$this->load->view('element/footer');
	}

}
