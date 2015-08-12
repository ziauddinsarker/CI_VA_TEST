<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();        
		$this->load->helper('captcha');	
		
		$this->load->database(); // load database		
		$this->load->model('blog_model'); // load Blog model
		$this->load->model('event_model'); // load Event model
		$this->load->model('company_model'); // load Company model
		$this->load->model('doctor_model'); // load Doctor model
		$this->load->model('user_model'); // load Users model
		$this->load->model('home_model'); // load Home model
		$this->load->model('location_model'); // load Location model
		$this->load->model('search_model');
		$this->load->model('healthcare_model');
		
		//Get Blog Data
		//$this->data['blogs'] = $this->blog_model->getPosts(); // calling Blog model method getPosts()
		$this->data['blogs'] = $this->blog_model->get_all_posts();		
		
		//Get Events Data
		$this->data['events'] = $this->event_model->getEvents(); // calling Event model method getPosts()
		
		//Get Company Data
		$this->data['company_category'] = $this->company_model->getCompanyCategory(); // calling Company model method getPosts()
		$this->data['companys'] = $this->company_model->getCompanys(); // calling Company model method getPosts()
		
		//var_dump($this->data['company_category']);
		//var_dump($this->data['companys']);
		
		
		
		
		
		$this->data['doctors_rating'] = $this->doctor_model->getDoctorsRating(); // calling Blog model method getPosts()
				
		//Get All Districts
		$this->data['district'] = $this->home_model->getDistrict();
		
		//Get Doctors Data
		$this->data['doctors_category'] = $this->home_model->getAllDoctorsCategory();			
		$this->data['doctors_category_only'] = $this->home_model->getDoctorsCategoryOnly();		
		//Get All Doctors Data
		$this->data['all_doctors'] = $this->home_model->get_all_doctor();
		//var_dump($this->data['all_doctors']);
		//Get All Discount
		$this->data['all_discount'] = $this->home_model->getAllDiscount();
		
		  //Get Divistion
         $this->data['divisions'] = $this->location_model->get_division();
		 
    }

	//Index Function
	public function index()	
	{		
			 $this->load->view('template/view_header');								
			//$this->load->view('view_home', $this->data); // load the view file , we are passing $data array to view file	

			$this->load->view('template/view_about', $this->data);			
			$this->load->view('template/view_brand', $this->data);			
			$this->load->view('template/view_events', $this->data);			
			$this->load->view('template/view_review_news', $this->data);			
			$this->load->view('template/view_doctor', $this->data);			
			$this->load->view('template/view_discount', $this->data);	 	
			$this->load->view('template/view_healthcare', $this->data);			
			$this->load->view('template/view_faq', $this->data);			
			$this->load->view('template/view_contact', $this->data);				
			$this->load->view('template/view_footer');	 
	}	

	public function get_brand(){			
			$data = $this->search_model->get();
			echo json_encode($data);
	}

	
	public function get_com_by_cat(){		
		$catgory = $this->input->post('data');	
		$data = $this->company_model->get_company_by_category($catgory);		
		echo json_encode($data);
	}
	
	
	//Get Doctors From Category
	/* function getDoctorsFromCategory(){		

		if ($district_from_districts = $this->input->post('district'))
		{
			$query = $this->doctor_model->get_all_doctor_from_category($district_from_districts);
			header('Content-Type: application/json');
			echo json_encode($query);
		} else {
			redirect('home/getDoctorsFromCategory');
		}

	} */
	
	function getDoctorsFromCategory(){	
	
		if (isset($_POST['category'])) {
		  $data['ajax_req'] = TRUE;
		  $data['doctor_list'] = $this->doctor_model->get_doctor_by_category($_POST['category']);
		  $this->load->view('view_home',$data);

		}
	}
	
	
	
	//Get doctors from category when click
	function give_more_doctor() {
		$this->load->model('home_model'); // load Home model
        $category_name = $this->input->post('doctor_category_name');
		
		if ($category_name === NULL) {
            $results = $this->home_model->get_all();
        } else {
            $results = $this->home_model->get_doctor_by_cateogry($category_name);
        }
		
		//$results = $this->home_model->get_all();   
		
		//$results = $this->home_model->get_doctor_by_cateogry($category_name);		
		//$results = $this->home_model->get_doctor_by_cateogry('Andrologists  
//');		
        $data['doctor_list_from_doctor'] = $results;
        $filter_view = $this->load->view('doc_cat_filter', $data, TRUE);
	    echo json_encode($filter_view);
    }
	
	
	
	function add_new_entry()
    {
        //set validation rules
        $this->form_validation->set_rules('post_title', 'Title', 'required');
        $this->form_validation->set_rules('post', 'Post Body', 'required');
 
        if ($this->form_validation->run() == FALSE)
        {
            //if not valid
            $this->load->view('template/view_header');
            $this->load->view('view_home',$data);			
            $this->load->view('template/view_footer');
        }
        else
        {
            //if valid
            $title = $this->input->post('post_title');
            $body = $this->input->post('post');
            $this->blog_model->add_new_entry($title,$body);
            $this->session->set_flashdata('message', '1 new entry added!');
			//if not valid
            redirect('home');
        }
    }
	
	
	//Add New post from homepage
	function new_post()//Creating new post page
    {
        if(!$this->check_permissions('author'))//when the user is not an admin and author
        {
            redirect(base_url().'users/login');
        }
        if($this->input->post())
        {
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post' => $this->input->post('post'),
                'active' => 1,
            );
            $this->blog_model->insert_post($data);
            redirect(base_url());
        }
        else{          
            $this->load->view('template/view_header');
            $this->load->view('view_home');
            $this->load->view('template/view_footer');
        }
    }
	//Add New Event from Homepage
	function new_event()//Creating new post page
		{
			if(!$this->check_permissions('author'))//when the user is not an admin and author
			{
				redirect(base_url().'users/login');
			}
			
			 //set validation rules
			$this->form_validation->set_rules('events_name', 'Event Name', 'required');
			$this->form_validation->set_rules('events_time', 'Event Time', 'required');
			$this->form_validation->set_rules('events_address', 'Event Address', 'required');
			$this->form_validation->set_rules('events_phone', 'Event Phone', 'required');
			$this->form_validation->set_rules('events_contact_time', 'Post Body', 'required');
			$this->form_validation->set_rules('events_email', 'Post Body', 'required');
			$this->form_validation->set_rules('events_email', 'Post Body', 'required');
			$this->form_validation->set_rules('events_content', 'Post Body', 'required');
	 
			if ($this->form_validation->run() == FALSE)
			{
				//if not valid
				$this->load->view('template/view_header');
				$this->load->view('view_home',$data);			
				$this->load->view('template/view_footer');
			}
			else
			{				
				if($this->input->post())
					{
						$data = array(
							'events_name' => $this->input->post('events_name'),
							'events_time' => $this->input->post('events_time'),
							'events_address' => $this->input->post('events_address'),
							'events_phone' => $this->input->post('events_phone'),
							'events_contact_time' => $this->input->post('events_contact_time'),
							'events_email' => $this->input->post('events_email'),
							'events_content' => $this->input->post('events_content'),
							'event_author' => $this->input->post($_GET['session_id']),
						);
						$this->event_model->insert_event($data);
						$this->session->set_flashdata('message', '1 new entry added!');
						redirect(base_url());
					}
					else{          
						$this->load->view('template/view_header');
						$this->load->view('view_home');
						$this->load->view('template/view_footer');
					}
			}		
		}

	
	function check_permissions($required)//checking current user's permission
		{
			$user_type = $this->session->userdata('user_type');//curren user
			if($required == 'user')//requirment is user 
			{
				if($user_type){return TRUE;}//all user have permission
			}
			elseif($required == 'author')//when requirement is author
			{
				if($user_type == 'author' || $user_type == 'admin')//author and admin have the permission
				{
					return TRUE;
				}
			}
			elseif($required == 'admin')//when required is admin
			{
				if($user_type == 'admin'){return TRUE;}//only admin have the permission
			}
		}
		
			
	
}