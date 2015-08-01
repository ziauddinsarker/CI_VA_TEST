<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class doctor_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //get the username & password from tbl_usrs
    //Get All Posts
	function getDoctors(){
	  $this->db->select('*');
	  $this->db->from('doctors');
	  $this->db->join('doctors_category', 'doctors_category.id = doctors.doctor_specialist');	  
	  $query = $this->db->get();
	  return $query->result();
	}
	
	public function getSpecility(){
		$this->db->select('doctor_category_name');
		$this->db->from('doctors_category');	  
		$query = $this->db->get();
		return $query->result_array();
	}


}

?>