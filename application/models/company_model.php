<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class company_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //get the username & password from tbl_usrs
    //Get All Posts
	function getCompanys(){
	  $this->db->select('*');
	  $this->db->from('company');
	  $this->db->join('company_category', 'company_category.company_cat_id = company.company_business_type');	  
	  $query = $this->db->get();
	  return $query->result();
	}

}

?>