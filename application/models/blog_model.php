<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }	
	
	//Get All Posts
	function getPosts(){
	  $this->db->select("blog_id,blog_title,blog_description,blog_date");
	  $this->db->from('blog');
	  $query = $this->db->get();
	  return $query->result();
	}
	
	
	
	public function typeahead_blog(){	
		  $name_array = $this->db->query('SELECT DISTINCT blog_title from blog')->result_array();

			 $typeahead_string = '';
			 foreach ($name_array as $name)
			 {
			  $formatted_name    =  '"' . $name['blog_title'] . '", ';
			  $typeahead_string .= $formatted_name;
			 }

			 $option_list = "[" . rtrim($typeahead_string, ", ") . "]";
			 
			 return $option_list;
			 
			 //$data['typeahead'] = $option_list;
			 
		
	}
	
	
	
	

    //get the username & password from tbl_usrs
    function get_user($usr, $pwd)
    {
        $sql = "select * from tbl_usrs where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = 'active'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
	
	function get_logged_user($logged_usr){
    $query=$this->db->query('SELECT * FROM tbl_usrs WHERE username = $logged_usr');
    //$this->db->select('*');
    //$query= $this->db->get('customer');
    return $query->result();
		
	}
}

?>