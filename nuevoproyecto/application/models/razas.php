<?php
	/**
	* 
	*/
	class Razas extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		function muestra_razas(){
			$consulta = $this->db->get('razas');
			return $consulta->result();
		}
		function detalle_razas($id_razas = null){
			$this->db->where('ID_RAZA',$id_razas);
			$consulta = $this->db->get('razas');
			return $consulta->row();
		}
	}