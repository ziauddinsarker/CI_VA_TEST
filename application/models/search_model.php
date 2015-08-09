<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Search_model extends CI_Model {

	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	  public function get() {
		  $brand = $this->input->post('name');
		  $this->db->select('brand_name');
		  $this->db->from('brand');
		  $this->db->like('brand_name', $brand);
		  $query = $this->db->get();
		  $brand_array = array();
		  foreach ($query->result() as $row) {
		   $brand_array[] = $row->brand_name;
		  }
		  $data = $brand_array;
	  return $data;
  }
  
  
	
}
