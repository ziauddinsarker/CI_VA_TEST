<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model
{
	
	function getAllPosts(){
		$this->db->select();
        $this->db->from('posts');
		$query = $this->db->get();
        return $query->result();
	}
	
	
    function get_posts($number = 10, $start = 0)
    {
        $this->db->select();
        $this->db->from('posts');
		$this->db->join('users','');
        $this->db->where('active',1);
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }   
	
	
	function get_all_posts($number = 10, $start = 0)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where('active',1);
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result();
    }
    function get_post_count()
    {
        $this->db->select()->from('posts')->where('active',1);
        $query = $this->db->get();
        return $query->num_rows;
    }
	
    function get_post($post_id, $str_slug = '')
    {
		$row = $this->db->get_where('posts', array('post_title' => $post_id))->row();

        if ($row and ! $str_slug) {

            $str_slug = url_title($row->title, 'dash', TRUE);
            redirect("blog/post/{$int_id}/{$str_slug}");

        }
		
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