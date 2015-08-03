<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');  
		$this->load->helper('url');		
		$this->load->helper('form');		
		$this->load->helper('html');		
		$this->load->library('form_validation');
		
		$this->load->database(); // load database		
		$this->load->model('blog_model'); // load Blog model
    }

	//Index Function
	public function index()	
	{
			$this->load->view('template/view_header');		
			
			$this->data['blogs'] = $this->blog_model->getPosts(); // calling Post model method getPosts()		
			
			$this->load->view('view_home', $this->data); // load the view file , we are passing $data array to view file
		
			$this->load->view('template/view_footer');		
	}
	
	
	function add_new_entry()
    {
         //set validation rules
        $this->form_validation->set_rules('entry_name', 'Title', 'required|xss_clean|max_length[200]');
        $this->form_validation->set_rules('entry_body', 'Body', 'required|xss_clean');
 
        if ($this->form_validation->run() == FALSE)
        {
            //if not valid
            $this->load->view('blog/add_new_entry');
        }
        else
        {
            //if valid
            $name = $this->input->post('entry_name');
            $body = $this->input->post('entry_body');
            $this->blog_model->add_new_entry($name,$body);
            $this->session->set_flashdata('message', '1 new entry added!');
            redirect('blog/add_new_entry');
        }
    }
	
	
	

	
	
}