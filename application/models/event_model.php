<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Event_model extends CI_Model{
	
	public function __construct()
	{
		//Load the Database module
		$this->load->database();
        $this->load->helper('url');
	}
	
	
	function getEvents(){
	  $this->db->select("events_id,events_name,events_time,events_address,events_phone,events_contact_time,events_email,username");
	  $this->db->from('events');
	  $this->db->join('users','events.events_author = users.user_id');
	  $query = $this->db->get();
	  return $query->result();
	}
		
	
	
	public function add() 
	{
	  $fn = $this->input->post('fn');
	  $ln = $this->input->post('ln');
	  $ag = $this->input->post('ag');
	  $ad = $this->input->post('ad');
	  $data = array(
	   'firstname' => $fn,
	   'lastname' => $ln,
	   'age' => $ag,
	   'address' => $ad
	  );
	  $this->db->insert('crud', $data);
	 }
	 
	public function view() 
	{
	$ambil = $this->db->get('crud');
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
			$hasil[] = $data;
		}
		return $hasil;
		}
	}
		 
	public function edit($a) {
		$d = $this->db->get_where('crud', array('idcrud' => $a))->row();
		return $d;
	 }
		 
	function delete($a) {
		$this->db->delete('crud', array('idcrud' => $a));
		return;
	}
	
	function update($id) {
		$fn = $this->input->post('fn');
		$ln = $this->input->post('ln');
		$ag = $this->input->post('ag');
		$ad = $this->input->post('ad');
		$data = array(
		'firstname' => $fn,
		'lastname' => $ln,
		'age' => $ag,
		'address' => $ad
		);
		$this->db->where('idcrud', $id);
		$this->db->update('crud', $data);
	 }

}