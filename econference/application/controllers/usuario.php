<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("usuario_model","usuario_model");
	}

	public function login() {		
		
		//pegando valores que vieram do formulário;
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');
		
		$email = $this->usuario_model->findByEmailAndPassword($email, $senha);
		echo $email;
		
		if (count($email)===1) {			
			$data = array('id_usuario'=>$email[0]->id_usuario,'usuario'=>$email[0]->login, 'logado'=>true);
			
//			$this->session->set_userdata($data);
			
			
			
			//redireciona para o controller
			redirect("logado/index.php?nome=");
			
		}
		else {
			redirect("welcome/index");
		}
	}
	
	
	public function logout() {
		$this->session->sess_destroy();
		redirect("welcome/index");
	}

}