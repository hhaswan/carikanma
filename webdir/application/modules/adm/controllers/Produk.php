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
			'active_liproduk'=>'active',
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
			'active_taproduk'=>'active',
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
				//'id_umkm_produk' => 'null',
			);

		//masukkan ke database
		$this->M_adm->tambahData('produk',$data);
			redirect('adm/produk');

	}


public function add_produk_def (){

//$this->load->library('upload');
	$nmfile = "file_".time(); //nama file + fungsi time
	$config['upload_path'] = './uploads/'; //Folder untuk menyimpan hasil upload
	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	$config['max_size'] = '3072'; //maksimum besar file 3M
	$config['max_width']  = '5000'; //lebar maksimum 5000 px
	$config['max_height']  = '5000'; //tinggi maksimu 5000 px
	$config['file_name'] = $nmfile; //nama yang terupload nantinya
 $this->upload->initialize($config);
	//file_melap nama input tipe nya. jika nama file nya....
 if($_FILES['foto_produk']['name'])
 {
		 if ($this->upload->do_upload('foto_produk'))
		 {
				 $gbr = $this->upload->data();
//BATAS SUCI
				 /*data yang mau dimasukkan ke dalam bentuk json
				$this->input->post(nama input type) sedangkan
				ip0_melapor pengenal yg masuk ke database
				*/
				$data = array(
					'nama_produk' => $this->input->post('nm_produk') ,
					'deskripsi' => $this->input->post('desc_produk'),
					'foto_produk' =>$gbr['file_name'],
				);

			//masukkan ke database
			$this->M_adm->tambahData('produk',$data);

//BATAS SUCI BERAKHIR
				 //pesan yang muncul jika berhasil diupload pada session flashdata
				 $this->session->set_flashdata("pesan", "<span class=\"label label-success\" id=\"alert\">Tambah produk sukses !</span>");
				 redirect('adm/produk/add'); //jika berhasil maka akan ditampilkan view upload
		 }else{
				 //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
				 $this->session->set_flashdata("pesan", "<span class=\"label label-danger\" id=\"alert\">Tambah produk gagal !!</span>");
				 redirect('adm/produk/add'); //jika gagal maka akan ditampilkan form upload
		 }
 }

}


	public function edit($id= null)
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
		$this->load->view('V_edit_produk',$data);
		$this->load->view('element/footer');
	}

	public function edit_produk(){

			$id['id_produk'] = $this->input->post('id_produk');
		$data=array(
			'nama_produk' => $this->input->post('nm_produk') ,
			'deskripsi' => $this->input->post('desc_produk'),
			'foto_produk' => $this->input->post('desc_produk'),
			//'id_umkm_produk' => 'null',
		);
		//masukkan ke database
		$this->M_adm->updateData('produk',$data,$id);
		redirect('adm/produk');
	}

	public function hapus()
	{
		$id['id_produk']=$this->uri->segment(4);
		$this->M_adm->deleteData('produk',$id);
		redirect('adm/produk');
	}

}
