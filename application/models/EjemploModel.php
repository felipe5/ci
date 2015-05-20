<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EjemploModel extends CI_Model{

    public function construct(){
        parent::__construct();
    }
    public function consulta_simple(){
    	$sql = $this->db->query('SELECT dept_no, dept_name from departments WHERE dept_name="Finance"');
   		return $sql->result();
    }
    public function consulta_media(){
    	$sql = $this->db->query('SELECT first_name, last_name FROM employees WHERE gender="F" and emp_no>100000 AND emp_no<200000');
   		return $sql->result();
    }
    //Consulta comppleja sin paginacion
    // public function consulta_compleja(){ 
    // 	$sql = $this->db->query('SELECT first_name, last_name, salary, title, de.from_date , de.to_date, dept_name FROM
    // 		titles as t JOIN employees as e  JOIN salaries as s JOIN dept_emp as de JOIN departments as d
    // 		WHERE t.emp_no = e.emp_no AND
    // 			s.emp_no = e.emp_no AND
    // 			e.emp_no = de.emp_no AND
    // 			de.dept_no = d.dept_no AND 
    // 			e.emp_no < 90500 AND
    // 			e.emp_no > 90000');
    //     $consulta = $this->db->get($sql);
   	// 	return $sql->result();
    // }

    function filas(){//CAlcula las filas ineficientemente
        // $this->db->select('first_name, last_name, salary, title, dept_emp.from_date , dept_emp.to_date, dept_name');
        // $this->db->from('titles');
        // $this->db->join('employees','titles.emp_no = employees.emp_no');
        // $this->db->join('salaries', 'salaries.emp_no = employees.emp_no');
        // $this->db->join('dept_emp','employees.emp_no = dept_emp.emp_no');
        // $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
        // $this->db->where('employees.emp_no <', 90500);
        // $this->db->where('employees.emp_no >', 90000);
        // $consulta = $this->db->get();
        // return  $consulta->num_rows() ;
        return 8650;
    }
    public function consulta_compleja($por_pagina,$segmento){
        $this->db->select('first_name, last_name, salary, title, dept_emp.from_date , dept_emp.to_date, dept_name');
        $this->db->from('titles');
        $this->db->join('employees','titles.emp_no = employees.emp_no');
        $this->db->join('salaries', 'salaries.emp_no = employees.emp_no');
        $this->db->join('dept_emp','employees.emp_no = dept_emp.emp_no');
        $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
        $this->db->where('employees.emp_no <', 90500);
        $this->db->where('employees.emp_no >', 90000);
        $this->db->limit($por_pagina,$segmento);
        $consulta = $this->db->get();
        if($consulta->num_rows()>0){
                foreach($consulta->result() as $fila){
                    $data[] = $fila;
                }
                return $data;
        }
    }
    public function consulta_test(){
        $this->db->select('dept_no,dept_name');
        $consulta = $this->db->get('departments');
        
        if($consulta->num_rows()>0){
                foreach($consulta->result() as $fila){
                    $data[] = $fila;
                }
                return $data;
        }
    }
}