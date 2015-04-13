<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EjemploModel extends CI_Model{

    public function construct(){
        parent::__construct();
    }
    public function insert_usuario($nombre){
        $data = array(
            'nombre' => $nombre
        );
        $this->db->insert('tabla1', $data);
    }
}