<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index()
	{
		//echo 'hello';
		$this->load->view('element/header');
		$this->load->view('V_home');
		$this->load->view('element/footer');
	}
}
