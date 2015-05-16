<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Goals_model extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$query = $this->db
					  ->get('goals');

		$result = $query->row_array();

		return $result;
	}

}

?>