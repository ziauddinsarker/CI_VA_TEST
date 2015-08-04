<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('security');
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library('form_validation');	
		
		$this->load->database(); // load database			
		$this->load->model('user_model'); // load Users model
    }

	//Index Function
	public function index()	
	{
		
		//fetch data from department and designation tables
        $data['specility'] = $this->user_model->get_doctors_specility();
        $data['district'] = $this->user_model->get_district();
        $data['business_type'] = $this->user_model->get_company_category();
		
		
		//set validation rules
        $this->form_validation->set_rules('doctorfullname', 'Doctors Full Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('doctortitle', 'Doctors Title', 'trim|xss_clean');
        $this->form_validation->set_rules('doctorgender', 'Doctors Gender', 'trim|xss_clean');
        $this->form_validation->set_rules('doctorbmdc', 'Doctors BMDC', 'trim|xss_clean');
        $this->form_validation->set_rules('doctoruser_email', 'Doctors Email', 'required');
        $this->form_validation->set_rules('doctorphone', 'Doctors Phone', 'required|numeric');
        $this->form_validation->set_rules('specility', 'Doctors Specility', 'required|xss_clean');
        $this->form_validation->set_rules('doctoraddress', 'Doctors Address', 'required|xss_clean');
        $this->form_validation->set_rules('district', 'Doctors District', 'required|xss_clean');
        $this->form_validation->set_rules('doctoruser_name', 'Doctors User Name', 'required|xss_clean');
        $this->form_validation->set_rules('doctoruser_password_new', 'Doctors Password New', 'required');
        $this->form_validation->set_rules('doctoruser_password_repeat', 'Doctors Repeat Password', 'required');
		
		if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            $this->load->view('template/view_header');
            $this->load->view('user/view_registers', $data);
            $this->load->view('template/view_footer');
        }
        else
		{  //pass validation
			
			$userpass = array(
				'user_name' => $this->input->post('doctoruser_name'),
                'user_password' => $this->input->post('doctoruser_password_new')	
			);
			
			$this->db->insert('user_login', $userpass);
				
			$doc_user_name = $this->db->insert_id();
			
			
            $data = array(
                'doctor_name' => $this->input->post('doctorfullname'),
                'doctor_title' => $this->input->post('doctortitle'),
                'doctor_gender' => $this->input->post('doctorgender'),
                'doctor_bmdc_no' => $this->input->post('doctorbmdc'),
                'doctor_email' => $this->input->post('doctoruser_email'),
                'doctor_phone' => $this->input->post('doctorphone'),
                'doctor_specialist' => $this->input->post('specility'),
                'doctor_address_1' => $this->input->post('doctoraddress'),
                'doctor_district' => $this->input->post('district'),  
                'doctor_user_name' => $doc_user_name
            );

			
			
            //insert the form data into database
            $this->db->insert('doctors', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
            redirect('home/index');
        }
	
	}
		
	
	

}