<?php
	/**
	* 
	*/
	class Servicios extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		function muestra_servicios(){
			$consulta = $this->db->get('servicios');
			return $consulta->result();
		}
		function detalle_servicio($id_servicio = null){
			$this->db->where('ID_SERVICIO',$id_servicio);
			$consulta = $this->db->get('servicios');
			return $consulta->row();
		}
	}