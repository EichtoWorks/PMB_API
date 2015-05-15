<?php defined('BASEPATH') OR exit('No direct script access.');

//$timezone = "Australia/Melbourne";

//if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);



/*--------------------------------------------
-- Front End Controller
--------------------------------------------*/
class Public_Controller extends MX_Controller {

    public function __construct()
    {
		parent::__construct();
		$CI = & get_instance();
		//$this->template->set_theme('store');
		
		if($this->ion_auth->logged_in()){
			$CI->current_user = $this->ion_auth->user()->row();
			$this->template->set_theme($CI->current_user->themes);
		}else{
			$CI->current_user = null;
		}
		
		if(!defined('THEME_PATH')){
			define('THEME_PATH', ADDONS.'themes/'. $this->template->get_theme() );
		}
		
	}
}