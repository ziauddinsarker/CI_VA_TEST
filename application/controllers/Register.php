<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session','form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('html');		
		
		$this->load->database(); // load database			
		$this->load->model('user_model'); // load Users model
    }

	//Index Function
	public function index()	
	{
		echo 'welcome to userAdministration Controller';	
	}
		
	public function register(){
         
    }
	

}