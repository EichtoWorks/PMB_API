<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$query = $this->db
					  ->get('users');

		$result = $query->row_array();

		return $result;
	}

}

?>