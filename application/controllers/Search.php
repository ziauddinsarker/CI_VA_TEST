<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		$this->load->model('search_model');
		
	}
	
	
	public function index() {
		
		$this->load->view('search');		
	}
	
		public function get_brand(){			
			$data = $this->search_model->get();
			echo json_encode($data);
			}
	
}
