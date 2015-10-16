<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Noticias');
		$this->load->model('Servicios');
		$this->load->model('Canes');
		$num_noticias=0;
		$fin_noticias=10;
	}
	
	public function index()
	{
		$heade['titulo'] = 'Bienvenido';
		$heade['razas'] = $this->Canes->menu();
		$heade['servicios'] = $this->Servicios->muestra_servicios();
		$data['noticias'] = $this->Noticias->muestra_noticias();
		$this->load->view('templates/frontend/header', $heade);
		$this->load->view('frontend/principal', $data);
		$this->load->view('templates/frontend/footer');
	}

	public function detallar_noticia($id_noticia)
	{
		$id_noticia_limpio = $this->security->xss_clean($id_noticia);
		$data['detalle_noticia'] = $this->Noticias->detalle_noticia($id_noticia);
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

	public function categoria ($id_raza, $sexo){
		$id_raza_limpio = $this->security->xss_clean($id_raza);
		$sexo_limpio = $this->security->xss_clean($sexo);
		$heade['titulo'] = 'Categorias';
		$heade['razas'] = $this->Canes->menu();
		$heade['servicios'] = $this->Servicios->muestra_servicios();
		$data['canes'] = $this->Canes->muestra_canes($id_raza_limpio, $sexo_limpio);
		$this->load->view('templates/frontend/header', $heade);
		$this->load->view('frontend/categoria', $data);
		$this->load->view('templates/frontend/footer');

	}
}
