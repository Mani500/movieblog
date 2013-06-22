<?php

class User_model extends CI_Model {

	function __construct() {
	
		parent::__construct();
		
	}

	function insert_entry() {
	
		$data = Array("firstname"=>$this->input->post('firstname'),
		"lastname"=>$this->input->post('lastname'),
		"nickname"=>$this->input->post('nickname'),
		"password"=>$this->input->post('password'));
			
		$this->load->database();
		$this->db->insert('user', $data);
			
	}
	
	function login() {
		
		$this->db->from('user');
		$this->db->where('nickname',$this->input->post('nickname'));
		$this->db->where('password',$this->input->post('password'));
		$query = $this->db->count_all_results();
		Return $query;
			
	}
	
}

?>