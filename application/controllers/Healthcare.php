<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Healthcare extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');  
		$this->load->helper('url');		
		$this->load->helper('captcha');
		$this->load->helper('form');		
		$this->load->helper('html');		
		$this->load->library('form_validation');
		
		$this->load->database(); // load database	
		$this->load->model('company_model'); // load Company model
		$this->load->model('healthcare_model'); // load Company model

		$this->data['healthcares'] = $this->healthcare_model->get_single_healthcare(); // calling Company model method getPosts()
	
    }

	//Index Function
	public function index()	
	{
			$this->load->view('template/view_header');									
			$this->load->view('healthcare/view_healthcare', $this->data); // load the view file , we are passing $data array to view file		
			$this->load->view('template/view_footer');		
	}

}