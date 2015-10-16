<?php
	/**
	* 
	*/
	class Noticias extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		function muestra_noticias($limt_inf=0, $limit_sup = 10){
			$this->db->limit($limit_sup, $limt_inf);
			$this->db->order_by('FECHA_PUBLICACION', 'desc');
			$consulta = $this->db->get('noticias');
			return $consulta->result();
		}
		function detalle_noticia($id_noticia = null){
			$this->db->where('ID_NOTICIA',$id_noticia);
			$consulta = $this->db->get('noticias');
			return $consulta->row();
		}
	}