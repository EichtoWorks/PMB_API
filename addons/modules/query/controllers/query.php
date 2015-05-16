<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Query extends Public_Controller 
{

	public $params = null;

	public function init()
	{
		$this->params['GET'] = $this->input->get();
		$this->params['POST'] = $this->input->post();
	}

	public function index()
	{
		$Query = $this->input->get('param');

		$data['method_runner'] 	= Modules::run('test/testhmvc');
		$data['searchKeyword'] 	= $Query;
		$data['QueryResult'] 	= $Query ? file_get_contents($Query) : '';
		
		$this->template
			 ->build('index', $data);
	}

}

?>
