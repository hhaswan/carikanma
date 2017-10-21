<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk	extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_adm');
		$this->load->helper(array('url','text','form'));
	}

	public function index()
	{
		$data = array(
			'title' => 'Produk | Carikanma',
			'titleku'=>'Produk',
			'ambil_data' => $this->M_adm->tampilData('produk'),
			);

		$this->load->view('element/header',$data);
		$this->load->view('v_list_produk',$data);
		$this->load->view('element/footer');
	}

	public function detil($id=null)
	{
		if($id == null){
			redirect(base_url('error'));
		}
		$data = array(
			'title' => 'Detil Perangkat | DOC',
			'titleku'=>'Detil Perangkat',
			'ambil_data' => $this->M_adm->getEditdata($id),
			);

		$this->load->view('element/header',$data);
		$this->load->view('V_detil_perangkat',$data);
		$this->load->view('element/footer');
	}

	public function add()
	{

		$data = array(
			'title' => 'Tambah Produk | Carikanma',
			'titleku'=>'Tambah Produk',
		);

		$this->load->view('element/header',$data);
		$this->load->view('V_add_produk',$data);
		$this->load->view('element/footer');
	}

		public function add_produk()
	{
			$data = array(
				'nama_produk' => $this->input->post('nm_produk') ,
				'deskripsi' => $this->input->post('desc_produk'),
				'foto_produk' => $this->input->post('desc_produk'),
				'id_umkm_produk' => 'null',
			);

		//masukkan ke database
		$this->M_adm->tambahData('produk',$data);
		redirect('adm/produk');
	}

	public function edit($id = null)
	{
		if($id == null){
			redirect(base_url('error'));
		}
		$data = array(
			'title' => 'Edit Produk | Carikanma',
			'titleku'=>'Edit Produk',
			'edit_data' => $this->M_adm->getEditdata($id),
			);

		$this->load->view('element/header',$data);
		$this->load->view('V_edit_perangkat',$data);
		$this->load->view('element/footer');
	}

	public function edit_perangkat(){

		$id['perangkat_id'] = $this->input->post('perangkat_id');
		$data=array(
			'jenis_perangkat' => $this->input->post('jenis_pkt') ,
			'typety_perangkat' => $this->input->post('typety_pkt'),
			'type_perangkat' => $this->input->post('type_pkt') ,
			'tport_perangkat' => $this->input->post('tport_pkt') ,
			'ip_perangkat' => $this->input->post('ip_pkt') ,
			'port_perangkat' => $this->input->post('port_pkt') ,
			'user_perangkat' => $this->input->post('user_pkt') ,
			'pwdty_perangkat' => $this->input->post('pwdty_pkt') ,
			'pwd_perangkat' => $this->input->post('pwd_pkt') ,
		);

		/*
		parse to json
		*/
		$json_data['perangkat_data']=json_encode($data);

		//masukkan ke database
		$this->M_adm->updateData('tb_perangkat',$json_data,$id);

		redirect('perangkat');
	}

	public function hapus()
	{
		$id['id_produk']=$this->uri->segment(4);
		$this->M_adm->deleteData('produk',$id);
		redirect('adm/produk');
	}

}
