<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EjemploModel extends CI_Model{

    public function construct(){
        parent::__construct();
    }
    public function consulta_simple(){

    	 $sql = $this->db->query('SELECT * from departments');
   		 return $sql->result();



    	// $result = mysql_query("SELECT * from departments;");
     //    if($result){
     //        $rows = array();
     //        while($row = mysql_fetch_array($result)){
     //            $rows[] = $row;
     //        }
     //        return $rows;
     //    }else{
     //        echo 'Invalid query: ' . mysql_error() . "\n";
     //        echo 'Whole query: ' . $query; 
     //    }
     //    return 0;
   	 /*Esto estaba en el for
   	 	<td><?php echo $department['dept_no'] ?></td>
		<td><?php echo $department['dept_name'] ?></td>
	*/
    }
}