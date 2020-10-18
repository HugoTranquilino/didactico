<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_consulta');
	}

	public function index()
	{
		$this->load->view('inicio');
	}

	public function buscar()
	{
		var_dump($_POST);
	}
}
