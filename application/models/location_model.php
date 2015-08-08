<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class location_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	
	// Get Division
	public function get_division(){	
		$this->db->select('division_id,division_name');
        $this->db->from('division'); 
        $query = $this->db->get();
	  return $query->result();
	}
	
	// Get Districts
	public function get_district(){
		
		
	}
	
	// Get Thana
	public function get_thana(){
		
		
	}
	
	// Get Shop Location
	public function get_shop(){
		
		
	}
	
}
