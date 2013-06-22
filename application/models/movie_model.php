<?php

class Movie_model extends CI_Model {

	function __construct() {
	
		parent::__construct();
		
	}

	function insert_entry($file_path = null) {
	
		$data = Array("name"=>$this->input->post('name'),
		"date"=>$this->input->post('date'),
		"director"=>$this->input->post('director'),
		"affiche"=>basename($file_path),
		"genre"=>$this->input->post('genre'));
			
		$this->db->insert('movie', $data);
			
	}
	
	function do_upload() {
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size']	= '100';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('affiche')) {
			$error = array('error' => $this->upload->display_errors());
		}
		else {
			$file_data = $this->upload->data();
			return $file_data;

		}
	}
	
	function create_thumb($file = null) {
		
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 225;
		$config['height'] = 300;
		$config['source_image'] = "./uploads/".$file;
		$config['new_image'] = './uploads/thumbnails/';
		$this->load->library('image_lib', $config); 
		$this->image_lib->resize();
		
	}
	
}

?>