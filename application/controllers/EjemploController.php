<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EjemploController extends CI_Controller {
	function __construct(){//Agregada
		parent::__construct();
		$this->load->helper('url');//para que funcione el base_url().
		$this->load->model('EjemploModel');
	}

	function index(){
		$this->load->view('Ejemplo/Inicio');
		//$this->output->cache(500);
	}
	public function consulta_compleja(){
		$data['title'] = 'ci';
		$pages=100; //Número de registros mostrados por páginas
		$this->load->library('pagination'); //Cargamos la librería de paginación
		$config['base_url'] = base_url().'index.php/EjemploController/consulta_compleja/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
		$config['total_rows'] = $this->EjemploModel->filas();//calcula el número de filas  
		$config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 20; //Número de links mostrados en la paginación
 		$config['first_link'] = 'Primera';//primer link
		$config['last_link'] = 'Ultima';//último link
        $config["uri_segment"] = 3;//el segmento de la paginación
		$config['next_link'] = 'Siguiente';//siguiente link
		$config['prev_link'] = 'Anterior';//anterior link
		$config['full_tag_open'] = '<div id="paginacion">';//el div que debemos maquetar
		$config['full_tag_close'] = '</div>';//el cierre del div de la paginación
		$this->pagination->initialize($config); //inicializamos la paginación		
		$datos['Personas'] = $this->EjemploModel->consulta_compleja($config['per_page'],$this->uri->segment(3));
    	$this->load->view('Ejemplo/consulta_compleja', $datos);
	}
	// public function consulta_simple(){
	// 	$datos['departments'] = $this->EjemploModel->consulta_simple();
 //    	$this->load->view('Ejemplo/consulta_simple', $datos);
	// }
	public function consulta_simple(){
		$data['title'] = 'ci3';
		$pages=100; //Número de registros mostrados por páginas
		$this->load->library('pagination'); //Cargamos la librería de paginación
		$config['base_url'] = base_url().'index.php/EjemploController/consulta_simple/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
		$config['total_rows'] = $this->EjemploModel->filas_simple();//calcula el número de filas  
		$config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 20; //Número de links mostrados en la paginación
 		$config['first_link'] = 'Primera';//primer link
		$config['last_link'] = 'Ultima';//último link
        $config["uri_segment"] = 3;//el segmento de la paginación
		$config['next_link'] = 'Siguiente';//siguiente link
		$config['prev_link'] = 'Anterior';//anterior link
		$config['full_tag_open'] = '<div id="paginacion">';//el div que debemos maquetar
		$config['full_tag_close'] = '</div>';//el cierre del div de la paginación
		$this->pagination->initialize($config); //inicializamos la paginación		
		$datos['departments'] = $this->EjemploModel->consulta_simple($config['per_page'],$this->uri->segment(3));
    	$this->load->view('Ejemplo/consulta_simple', $datos);
	}
	public function consulta_media(){
		$data['title'] = 'ci2';
		$pages=100; //Número de registros mostrados por páginas
		$this->load->library('pagination'); //Cargamos la librería de paginación
		$config['base_url'] = base_url().'index.php/EjemploController/consulta_media/';
		$config['total_rows'] = $this->EjemploModel->filas_media();//calcula el número de filas  
		$config['per_page'] = $pages; //Número de registros mostrados por páginas
		$config['num_links'] = 20; //Número de links mostrados en la paginación
 		$config['first_link'] = 'Primera';//primer link
		$config['last_link'] = 'Ultima';//último link
        $config["uri_segment"] = 3;//el segmento de la paginación
		$config['next_link'] = 'Siguiente';//siguiente link
		$config['prev_link'] = 'Anterior';//anterior link
		$config['full_tag_open'] = '<div id="paginacion">';//el div que debemos maquetar
		$config['full_tag_close'] = '</div>';//el cierre del div de la paginación
		$this->pagination->initialize($config); //inicializamos la paginación	
		$datos['personasF'] = $this->EjemploModel->consulta_media($config['per_page'],$this->uri->segment(3));

		//$datos['personasF'] = $this->EjemploModel->consulta_media();
		$this->load->view('Ejemplo/consulta_media', $datos);
	}
	// public function consulta_compleja(){
	// 	$datos['Personas'] = $this->EjemploModel->consulta_compleja();
	// 	$this->load->view('Ejemplo/consulta_compleja', $datos);
	// }
}?>