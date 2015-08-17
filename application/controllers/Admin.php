<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();      
		
		$this->load->database(); // load database	
		$this->load->model('brand_model');
		$this->load->model('shop_model');
		$this->load->model('doctor_model');
		$this->load->model('user_model');
		$this->load->model('blog_model');
		$this->load->model('profile_model');
    }

	public function index()
	{ 		
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_admin');
        $this->load->view('admin/view_footer');	
	
	}
	
	public function medicine()
	{ 		
		$data['medicines'] = $this->brand_model->get_shop_based_on_thana_and_brand();
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_medicine',$data);
        $this->load->view('admin/view_footer');
		echo json_encode($data);
		
	}
	
	public function shop()
	{ 		
		$data['shops'] = $this->shop_model->index();
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_shop', $data);
        $this->load->view('admin/view_footer');
		
	}
	
	public function doctor()
	{ 		
		$data['doctors'] = $this->doctor_model->getDoctorsInformation();
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_doctor',$data);
        $this->load->view('admin/view_footer');
		
	}
	
	public function user()
	{ 		
		$data['users'] = $this->user_model->get_all_users();
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_user',$data);
        $this->load->view('admin/view_footer');
		
	}
	
	public function blog()
	{ 		
		$data['blogs'] = $this->blog_model->getAllPosts();
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_blog',$data);
        $this->load->view('admin/view_footer');
		
	}
	
	public function profile(){
		$data['profiles'] = $this->profile_model->get_profile( 4,'admin' );
		$this->load->view('admin/view_header');
       	$this->load->view('admin/view_user_profile',$data);
        $this->load->view('admin/view_footer');
		//echo json_encode($data);
	}
	
}