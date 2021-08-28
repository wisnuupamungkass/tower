<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	
	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				
			   $this->load->helper(array('form', 'url','html'));
               $this->load->library(array('form_validation','table','template'));
			   $this->load->database();
        }
	// Index login
	public function index() 
	{
		$this->template->display('login_view');
	}
}