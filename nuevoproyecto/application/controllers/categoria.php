<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Canes');
		$num_noticias=0;
		$fin_noticias=10;
	}
	
	public function index()
	{
		$data['canes'] = $this->Canes->muestra_canes();
		$this->load->view('categoria', $data);
	}

	public function detallar_noticia($id_can)
	{
		$id_can_limpio = $this->security->xss_clean($id_can);
		$data['detalle_canes'] = $this->Canes->detalle_canes($id_can_limpio);
	}

	public function cambia_pagina ($id_cambio)
	{
		$id_cambio_limpio = $this->security->xss_clean($id_cambio);
		if($id_cambio_limpio){
			$data['noticias'] = $this->Noticias->muestra_noticias($num_noticias+10, $fin_noticias+10);
			$this->load->view('principal', $data);
		}else if(!$id_cambio_limpio && ($num_noticias>=0 && $fin_noticias>=10)){
			$data['noticias'] = $this->Noticias->muestra_noticias($num_noticias-10, $fin_noticias-10);
			$this->load->view('principal', $data);
		}
		else {
			$data['noticias'] = $this->Noticias->muestra_noticias();
			$this->load->view('principal', $data);
		}
	}
}