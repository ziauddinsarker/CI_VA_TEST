<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shop_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }	
	
	public function index(){		
	  $this->db->select('*');
	  $this->db->from('shop');
	  $this->db->join('thana', 'shop.shop_thana = thana.thana_id');	  
	  $query = $this->db->get();
	  return $query->result();
	}
	
}
