<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('event_model'); // load Event model
		$this->load->model('company_model'); // load Company model
		$this->load->model('doctor_model'); // load Doctor model
		$this->load->model('user_model'); // load Users model
    }

	//Index Function
	public function index()	
	{
			$this->load->view('template/view_header');		
			$this->data['blogs'] = $this->blog_model->getPosts(); // calling Post model method getPosts()			
			$this->data['events'] = $this->event_model->getEvents(); // calling Post model method getPosts()
			$this->data['company_category'] = $this->company_model->getCompanys(); // calling Post model method getPosts()
			$this->load->view('view_home', $this->data); // load the view file , we are passing $data array to view file
		
			$this->load->view('template/view_footer');		
	}
	
	
	public function register_user(){
		
		//Create the data objects
		//$data = new stdClass();
		
		
		
		//Set Validation Rules
		// set validation rules
		$this->form_validation->set_rules('fullname', 'Full Name', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('bmdc', 'BMDC No', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('phone', 'Phone No', 'trim|required|numeric');
		$this->form_validation->set_rules('specialist', 'Specility', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|alpha_numeric');
		$this->form_validation->set_rules('district', 'Districts', 'trim|required|alpha_numeric');
		// set validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('user_password_new', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('user_password_repeat', 'Confirm Password', 'trim|required|min_length[6]|matches[user_password_new]');
		
		$data['specility'] = $this->doctor_model->getSpecility(); // calling Post model method getPosts()
	
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('template/view_header');			
			$this->load->view('user/view_registers', $data);
			$this->load->view('template/view_footer');
			
		} else {			
			// set variables from the form
			$fullname = $this->input->post('fullname');
			$title = $this->input->post('title');
			$gender = $this->input->post('gender');
			$bmdc = $this->input->post('bmdc');
			$email    = $this->input->post('user_email');			
			$phone = $this->input->post('phone');
			$specialist = $this->input->post('specialist');
			$address = $this->input->post('address');
			$district = $this->input->post('district');
			$user_name = $this->input->post('user_password_new');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_user($fullname,$title,$gender,$bmdc,$email,$phone,$specialist,$address,$district,$user_name,$password)) {
				
				
				// user creation ok
				$this->load->view('template/view_header');
				$this->load->view('user/view_register_success', $data);
				$this->load->view('template/view_footer');
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('template/view_header');
				$this->load->view('user/view_registers', $data);
				$this->load->view('template/view_footer');
				
			}
		
		}
	
	}
	
	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */
	public function register() {
		
		// create the data object
		$data = new stdClass();

		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('template/view_header');
			$this->load->view('user/view_registers', $data);
			$this->load->view('template/view_footer');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_user($username, $email, $password)) {
				
				// user creation ok
				$this->load->view('template/view_header');
				$this->load->view('user/view_register_success', $data);
				$this->load->view('template/view_footer');
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('template/view_header');
				$this->load->view('user/view_registers', $data);
				$this->load->view('template/view_footer');
				
			}
			
		}
		
	}
	
	
	
	
	
	//Login Function
	public function login(){
		// create the data object
		$data = new stdClass();

		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('template/view_header');
			$this->load->view('user/view_login');
			$this->load->view('template/view_footer');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				
				// set session user datas
				$_SESSION['user_id']      = (int)$user->id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				$_SESSION['is_admin']     = (bool)$user->is_admin;
				
				// user login ok
				$this->load->view('template/view_header');
				$this->load->view('user/view_login_success', $data);
				$this->load->view('template/view_footer');
				
			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('template/view_header');
				$this->load->view('user/view_login', $data);
				$this->load->view('template/view_footer');
				
			}
			
		}
	}
	
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			$this->load->view('template/view_header');
			$this->load->view('user/view_logout_success', $data);
			$this->load->view('template/view_footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}
	
	

	
	
}