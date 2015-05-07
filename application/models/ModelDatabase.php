<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDatabase extends CI_Model {

	public function _construct()
	{
		parent::_construct();
	}
	public function getUsers()
	{
		$query= $this->db->query("SELECT * FROM users;");
		if($query->num_rows()>0) {
			return $query->result();
		}
		else{
			return NULL;
		}
	}
}
