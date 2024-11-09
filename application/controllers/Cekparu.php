<?php
class Cekparu extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		//$this->load->model('Artikel_model');
		$this->load->helper('url_helper');
	}
	public function index(){
		$this->load->view('cekparu');
	}
}?>