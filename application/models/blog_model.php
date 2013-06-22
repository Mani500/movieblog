<?php

class Blog_model extends CI_Model {

	function __construct() {
	
		parent::__construct();
		
	}

	function content() {
		$movies = array();

		$this->load->model("comment_model");

		$query = $this->db->get('movie');
		$movies = $query->result_array();

		for ($i = 0; $i < count($movies); $i++) {
			$movies[$i]["comments"] = $this->comment_model->content($movies[$i]["id"]);
		}

		log_message("debug", print_r($movies, true));

		return $movies;
	}
	
}

?>