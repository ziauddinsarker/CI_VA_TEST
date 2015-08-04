<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');  
		$this->load->helper('url');		
		$this->load->helper('form');		
		$this->load->helper('html');		
		$this->load->library('form_validation');
		$this->load->helper('security');
		
		$this->load->database(); // load database	

		$this->load->model('login_database');

		
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
		$this->load->view('user/view_login');
		$this->load->view('template/view_footer');
		
		/* // create the data object
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
			
		}	 */
	}
	
	// Check for user login process
		public function user_login_process() {

			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) {
			
				if(isset($this->session->userdata['logged_in'])){
					$this->load->view('admin/view_header');
					$this->load->view('admin/view_admin');
					$this->load->view('admin/view_footer');
				}else{
					$this->load->view('template/view_header');
					$this->load->view('user/view_login');
					$this->load->view('template/view_footer');
				}
			} else {
				$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
				$result = $this->login_database->login($data);
				if ($result == TRUE) {

					$username = $this->input->post('username');
					$result = $this->login_database->read_user_information($username);
					if ($result != false) {
					$session_data = array(
					'username' => $result[0]->user_name,
					'email' => $result[0]->user_email,
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('admin/view_header');
					$this->load->view('admin/view_admin');
					$this->load->view('admin/view_footer');
					}
				} else {
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
								
				$this->load->view('template/view_header', $data);
				$this->load->view('user/view_login', $data);
				$this->load->view('template/view_footer', $data);
				}
			}
		}

	
	
	// Logout from admin page
		public function logout() {

			// Removing session data
			$sess_array = array(
			'username' => ''
			);
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			$this->load->view('template/view_header');
			$this->load->view('view_home');
			$this->load->view('template/view_footer');
		}
		
		
	
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	 
	 /* 
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
		
	} */

	
	
}