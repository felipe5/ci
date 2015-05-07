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


    
    public function consulta_simple(){
    	$result = mysql_query("SELECT * from departments;");
        if($result){
            $rows = array();
            while($row = mysql_fetch_array($result)){
                $rows[] = $row;
            }
            return $rows;


        }else{
            echo 'Invalid query: ' . mysql_error() . "\n";
            echo 'Whole query: ' . $query; 
        }
        return 0;
    }
}