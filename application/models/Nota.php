<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota extends CI_Model{

	public function getAll(){
		$query = $this->db->query("SELECT * from nota");
		return $query->result_array();
	}

	public function insert($data){
		//$this->
	}	
}