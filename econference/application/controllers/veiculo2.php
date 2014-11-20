<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Veiculo2 extends CI_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("veiculo_model","veiculo_model");
	}
	
	public function entradaDePlaca(){
		$placa = $this->input->post('placa');
		
		echo $placa;die();
	}
	
	public function entradaOuSaida(){
		$placa = $this->get('placa');
		$taDentro = $this->veiculo_model->taDentro($placa);
		
		if ($taDentro){
			$this->veiculo_model->saida($placa);
		}else{
			$vaga = $this->veiculo_model->pegaVaga();
			$this->veiculo_model->entrada($placa,$vaga);
		}
		
		
		
		//$this->veiculo_model->entradaOuSaida($placa);
	}
	public function novo(){
	
	}
	
	
	/*
		se encontrar --> redireciona para dar entrada no eacionamento
		
		se não encontar a placa---> redirecionar para o form de cadastro da placa
			cadastra a placa e já dá entrada
		
		
		echo $usuario;
		*/	
	}
	
}
?>