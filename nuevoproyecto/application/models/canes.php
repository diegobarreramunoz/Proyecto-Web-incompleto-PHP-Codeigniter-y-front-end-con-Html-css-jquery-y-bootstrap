<?php
	/**
	* 
	*/
	class Canes extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		function muestra_canes($id_raza, $tipo, $limt_inf=0, $limit_sup = 30){
			$this->db->limit($limit_sup, $limt_inf);
			$this->db->where('ID_RAZA', $id_raza);
			$this->db->where('SEXO', $tipo);
			$consulta = $this->db->get('canes');
			return $consulta->result();
		}

		function detalle_canes($id_can = null){
			$this->db->where('ID_CAN',$id_can);
			$consulta = $this->db->get('canes');
			return $consulta->row();
		}
		function menu(){
			$this->db->select('razas.NOMBRE_RAZA, razas.ID_RAZA, 
				count(case SEXO when "F" then 1 else null end) as Hembras, 
        		count(case SEXO when "M" then 1 else null end) as Machos, 
        		count(case SEXO when "C" then 1 else null end) as Cachorros');
			$this->db->from('canes');
			$this->db->join('razas', 'canes.id_raza = razas.id_raza');
			$this->db->group_by("razas.NOMBRE_RAZA");
			$consulta = $this->db->get();
			return $consulta->result();
		}
	}