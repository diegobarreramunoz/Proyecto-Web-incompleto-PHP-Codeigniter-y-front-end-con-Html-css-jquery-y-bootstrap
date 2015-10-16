<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Seleccion extends CI_Controler
{
		
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['canes'] = $this->Canes->detalle_canes(1);
		$this->load->view('seleccion', $data);
	}
}