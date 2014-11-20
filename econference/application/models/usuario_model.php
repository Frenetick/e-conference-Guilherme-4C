<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_Model extends CI_Model {
	 
	//var $id;
	//var $usuario;
	//var $senha;
	var $id;
	var $cpf;
	var $email;
	var $nome;
	var $nascimento;
	var $fone;
	var $instituicao;
	var $inscricao;
	var $senha;
	var $interesses;

	function __construct(){
		parent::__construct();
	}
	
	public function findByEmailAndPassword($email, $senha){
	
		$this->db->where('email',$email);
		$this->db->where('password',$senha);	
		return $this->db->get('usuario')->result();
		//usuario, aqui, é a tabela na qual ele vai buscar!! DB TABLE USUARIO
	}
	
	public function listUsersNotAdmin() {
		$usuarios = $this->db->get('login')->result(); 
		return $usuarios;
	}
}