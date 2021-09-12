<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_model extends CI_Model {
	public function get_all(){
		$res = $this->db->get('users')->result();
		return $res;
	}
}