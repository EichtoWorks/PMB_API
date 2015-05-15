<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Public_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$data['method_runner'] = Modules::run('test/testhmvc');
		$this->template
			 ->set_layout('homepage')
			 ->build('welcome_message',$data );
	}
	
	public function nosession()
	{
		$data['method_runner'] = Modules::run('test/testhmvc');
		$this->template
			 ->build('home',$data );
	}
	
	public function testhmvc()
	{
		echo 'Modular Extension == Module name "Module, Method: Testhmvc"';
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */