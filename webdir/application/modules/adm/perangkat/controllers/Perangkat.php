<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perangkat extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_perangkat');
		$this->load->helper(array('url','text','form'));
	}

	public function index()
	{

		$data = array(
			'title' => 'List Perangkat | DOC',
			'titleku'=>'List Perangkat',
			'ambil_data' => $this->M_perangkat->tampilData('tb_perangkat'),
			);

		$this->load->view('element/header',$data);
		$this->load->view('V_list_perangkat',$data);
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
			'ambil_data' => $this->M_perangkat->getEditdata($id),
			);

		$this->load->view('element/header',$data);
		$this->load->view('V_detil_perangkat',$data);
		$this->load->view('element/footer');
	}

	public function add()
	{

		$data = array(
			'title' => 'Tambah Perangkat | DOC',
			'titleku'=>'Tambah Perangkat',
		);

		$this->load->view('element/header',$data);
		$this->load->view('V_add_perangkat',$data);
		$this->load->view('element/footer');
	}

		public function add_perangkat()
	{
			$data = array(
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
		perangkat_data adalah nama kolom dari tabel
		*/
		$json_data['perangkat_data']=json_encode($data);

		//masukkan ke database
		$this->M_perangkat->tambahData('tb_perangkat',$json_data);
		redirect('perangkat/add');
	}

	public function edit($id = null)
	{
		if($id == null){
			redirect(base_url('error'));
		}
		$data = array(
			'title' => 'Edit Perangkat | DOC',
			'titleku'=>'Edit Perangkat',
			'edit_data' => $this->M_perangkat->getEditdata($id),
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
		$this->M_perangkat->updateData('tb_perangkat',$json_data,$id);

		redirect('perangkat');
	}

	public function hapus()
	{
		$id['perangkat_id']=$this->uri->segment(3);
		$this->M_perangkat->deleteData('tb_perangkat',$id);
		redirect('perangkat');
	}

}
