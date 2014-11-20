<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Veiculo extends CI_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("usuario_model","usuario_model");
	}
	
	public function entradaDePlaca{
		$placa = $this->input->post('placa');
		
		echo $placa;die();
		
		$jaTemPlaca = $this->veiculo_model->placaJaExiste($placa);
		
		print_r($jaTemPlaca);die();
	
		if($jaTemPlaca){
			redirect("veiculo/entrouOuSaiu?placa=$placa");
		}else{
			redirect("veiculo/novo?placa=$placa");
		}
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