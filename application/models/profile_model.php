<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    
	
	function get_profile(/* $profile_id, $user_type */){
		$this->db->select('user_id,username,email');
        $this->db->from('users');
        $this->db->get_where('user_id', '4');
        $this->db->get_where('user_type', 'admin');
        $query = $this->db->get();
        return $query->first_row('array');
}
	
	
	
	
    function get_post($post_id)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where(array('active'=>1,'post_id'=>$post_id));
        $this->db->order_by('date_added','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }
	
	
    function insert_post($data)
    {
        $this->db->insert('posts',$data);
        return $this->db->insert_id();
    }
    
    function update_post($post_id, $data)
    {
        $this->db->where('post_id',$post_id);
        $this->db->update('posts',$data);
    }
    
    function delete_post($post_id)
    {
        $this->db->where('post_id',$post_id);
        $this->db->delete('posts');
    }
	
}

?>