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
    public function consulta_compleja(){
    	$sql = $this->db->query('SELECT first_name, last_name, salary, title, de.from_date , de.to_date, dept_name FROM
    		titles as t JOIN employees as e  JOIN salaries as s JOIN dept_emp as de JOIN departments as d
    		WHERE t.emp_no = e.emp_no AND
    			s.emp_no = e.emp_no AND
    			e.emp_no = de.emp_no AND
    			de.dept_no = d.dept_no AND 
    			e.emp_no < 90500 AND
    			e.emp_no > 90000');
   		return $sql->result();
    }
}