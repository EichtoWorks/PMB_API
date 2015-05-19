<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');

class Goals extends REST_Controller 
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('goals_model', 'goals');
		$this->load->model('users/users_model', 'users');
	}

	function getGoals_get()
	{
		$getAllGoals = $this->goals->getAll();
		echo "<pre>";
			print_r($getAllGoals);
		echo "</pre>";
		exit;
	
		$data = array(
					"Major" => array(
								"0" => array(
										"id" => "1",
										"name" => "Car",
										"amount" => "P 5,000.00",
									),
								"1" => array(
										"id" => "2",
										"name" => "Bike",
										"amount" => "P 2,000.00",
									)
							),
					"Minor" => array(
								"0" => array(
										"id" => "3",
										"name" => "House",
										"amount" => "P 500.00"
									),
								"1" => array(
										"id" => "4",
										"name" => "Laptop",
										"amount" => "P 300.00"
									),	
							)
				);

		$this->response($data, 200);
	}

	function updateGoals_get()
	{
		$Params = $this->input->get();
	}

	function addGoals_get()
	{
		$Params = $this->input->get();
	}

	function deleteGoals_get()
	{
		$Params = $this->input->get();
	}

}

?>
