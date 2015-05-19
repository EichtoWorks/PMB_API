<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Goals_model extends CI_Model 
{
	protected $_dbname = 'goals';

	function __construct()
	{
		parent::__construct();
	}

	/*
	 * Function:getAll() <- Public
	 * All Goals Record
	 */

	public function getAll()
	{
		$query = $this->db
						->select()
						->from($this->_dbname)
						->get()
						->result();

		return $query;
	}

	/* 
	 * Function:getByID($id = INT) <- Public
	 * Get Specific Goal Record with 'ID' parameter
	 */
	public function getByID($id = 0)
	{
		$query = $this->db
						->select()
						->from($this->_dbname)
						->where('id', $id)
						->get()
						->row();

		return $query;
	}

	public function createGoal($parameters = array())
	{
		
	}

}

?>