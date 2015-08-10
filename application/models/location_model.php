<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location_model extends CI_Model
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
	public function get_districts(){	
		//$division = $this->input->post(division);
		$this->db->select('*');
		$this->db->from('district'); 
		$this->db->join('division','district.division = division.division_id'); 
		$this->db->where('division_name','Barisal');
		$query = $this->db->get();
		return $query->result();
		
	}
	
	
	// Get Thana
	public function get_thana(){
		
		
	}
	
	// Get Shop Location
	public function get_shop(){
		
		
	}
	
}
