<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{ 		
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_admin');
        $this->load->view('admin/view_footer');
		
	}
	
	public function medicine()
	{ 		
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_medicine');
        $this->load->view('admin/view_footer');
		
	}
	
	public function shop()
	{ 		
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_shop');
        $this->load->view('admin/view_footer');
		
	}
	
	public function doctor()
	{ 		
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_doctor');
        $this->load->view('admin/view_footer');
		
	}
	
	public function user()
	{ 		
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_user');
        $this->load->view('admin/view_footer');
		
	}
	
	public function blog()
	{ 		
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_blog');
        $this->load->view('admin/view_footer');
		
	}
	
}