<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logado extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("usuario_model","usuario_model");
// 		$this->load->library('table');
	}
	
	public function index(){
		
		$data['usuarios'] = $this->usuario_model->listUsersNotAdmin();
		
		$this->load->view('header');
		$this->load->view('home_logado', $data);
		$this->load->view('footer');
	}
}