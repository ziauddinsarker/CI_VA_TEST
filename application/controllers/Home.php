<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	


	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');        
        $this->load->helper('html');
    }

	//Index file
	public function index()
	{ 		
		
		if($this->session->userdata('logged_in'))
		   {
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			 
			$this->load->view('view_header', $data);
			$this->load->view('view_home', $data);
			$this->load->view('view_footer', $data);
		   }
	   else
		   {
			 //If no session, redirect to login page
			 redirect('login', 'refresh');
		   }
		
	}
	
	
	public function get_full_name(){
		$this->load->model('home_model');
		$data = $this->home_model->get();
		echo json_encode($data);
	}
	
	
	
	
	//Logout 
	public function logout()
	 {
	   $this->session->unset_userdata('$sessiondata');
	   session_destroy();
	   redirect('home', 'refresh');
	 }
	 
	 
	 
	 
}