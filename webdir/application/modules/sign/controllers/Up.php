<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Up extends MX_Controller {

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
		$this->load->view('V_Up',$data);
		$this->load->view('element/footer');
	}

		public function add_user()
{
		$data = array(
			'nama_produk' => $this->input->post('nm_produk') ,
			'deskripsi' => $this->input->post('desc_produk'),
			'foto_produk' => $this->input->post('desc_produk'),
			//'id_umkm_produk' => 'null',
		);

	//masukkan ke database
	$this->M_adm->tambahData('produk',$data);
		redirect('adm/produk');

}

}
