<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EjemploController extends CI_Controller {
	function __construct(){//Agregada
		parent::__construct();
		$this->load->helper('url');//para que funcione el base_url().
		$this->load->model('EjemploModel');
	}

	function index(){
		$this->load->view('Ejemplo/Inicio');
	}
	public function consulta_simple(){
		$datos['departments'] = $this->EjemploModel->consulta_simple();
    	$this->load->view('Ejemplo/consulta_simple', $datos);
	}
	public function consulta_media(){

	}
	public function consulta_compleja(){
		
	}
}?>