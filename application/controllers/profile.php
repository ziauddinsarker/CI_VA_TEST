<?php

class Profile extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('model_profile');
    }
	
    
}