<?php

class Comment_model extends CI_Model {

	function __construct() {
	
		parent::__construct();
		
	}

	function insert_entry() {
	
		$data = Array("user"=>$_SESSION["user"],
		"movie"=>$this->input->post('movie'),
		"comment"=>$this->input->post('comment'));
		
		$this->db->insert('comment', $data);
			
	}
	
	function content($film = null) {
		
		$this->db->from('view_comments');
		$this->db->order_by("id", "asc");
		$this->db->where('movie',$film);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	function nb_comments($film = null) {
		
		$this->db->from('comment');
		$query = $this->db->where('movie',$film);
		return $query->count_all_results();
		
	}
	
}

?>