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
	
	public function getDoctorsInformation(){
	  $this->db->select('*');
	  $this->db->from('doctors');
	  $this->db->join('doctors_category', 'doctors.doctor_specialist = doctors_category.doctor_category_id');	  
	  $query = $this->db->get();
	  return $query->result();
		
	}

	
	//get_all_doctor_from_category
	/* function get_all_doctor_from_category($doc_cat_id){
		
		 $this->db->where('doctor_category_id', $doc_cat_id);

		$query = $this->db->get('doctors_category');

		if($query->result()){
			$result = $query->result();

			foreach($result as $row)
			{
				$options[$row->id] = $row->doctors_category_name;
			}   
			return $options;
		} 
	} */
	
	function get_node_by_type($type) {
        $this->db->select("*");
        $this->db->from('doctors_category');
		$this->db->join('doctors','doctors.doctor_specialist = doctors_category.doctor_category_id');
        $this->db->where('doctors_category.doctor_category_name', $type);
        $query = $this->db->get();
        return $query->result();
    }
	
	

}

?>