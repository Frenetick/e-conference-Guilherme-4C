<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class veiculo_Model extends CI_Model {
	 
	var $id;
	var $placa;
	var $tipo;
	var $modelo;
	var $cor;

	function __construct(){
		parent::__construct();
	}
	
	public function placaJaExiste($placa){
		$this->db->where('cod_vehicle',$placa);	
		return $this->db->get('vehicle')->result();
	}
	
	public function taDentro($placa){
		$this->db->where('vehicle',$placa);	
		return $this->db->get('parking_space')->result();
	}
	
	public function pegaVaga(){
		$this->db->where('vehicle',null);	
		return $this->db->get('parking_space',1)->result();
	}
	
	public function entrada($placa,$vaga){
		$this->db->where('vehicle',$vaga);	
		$this->db->insert('parking_space',$placa);
	}
	
	public function saida($placa){
		$this->db->where('vehicle',$placa);	
		
	}
	
	
}