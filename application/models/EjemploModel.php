<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EjemploModel extends CI_Model{

    public function construct(){
        parent::__construct();
    }
    public function consulta_simple(){
    	$sql = $this->db->query('SELECT * from departments');
   		return $sql->result();
    }
    public function consulta_media(){
    	$sql = $this->db->query();
   		return $sql->result();
    }
    public function consulta_compleja(){
    	$sql = $this->db->query();
   		return $sql->result();
    }
}