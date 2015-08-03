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
	
	//Add New Entry
	function add_new_entry($title,$body,$blog_cat)
    {
        $data = array(
            'blog_title' => $title,
            'blog_description' => $body,
            'blog_category' => $blog_cat
        );
        $this->db->insert('blog',$data);
    }
	
	//Get Blog Category List
	function get_blog_category(){
		
		$this->db->select('blog_category_id');
        $this->db->select('blog_category_name');
        $this->db->from('blog_category');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $blog_cat_id = array('-SELECT-');
        $blog_cat_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($blog_cat_id, $result[$i]->blog_category_id);
            array_push($blog_cat_name, $result[$i]->blog_category_name);
        }
        return $blog_cat_result = array_combine($blog_cat_id, $blog_cat_name);
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