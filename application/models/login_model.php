<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
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