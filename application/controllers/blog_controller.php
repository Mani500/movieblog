<?php
class Blog_controller extends CI_Controller {
	
	function index($page = null) {

		if (!isset($_SESSION["login"])) {
			$_SESSION["login"] = false;
			$_SESSION["user"] = null;
		}
		

		if($page=="add_user_sql") {
			$this->load->model('user_model');
			$this->user_model->insert_entry(); 
			$this->load->helper('url');
			redirect('');
		}
		elseif($page=="add_movie_sql") {
			$this->load->model('movie_model');
			$file_data = $this->movie_model->do_upload('affiche');
			$this->movie_model->create_thumb($file_data['file_name']);
			$this->movie_model->insert_entry($file_data['file_path'].$file_data['file_name']);
			$this->load->helper('url');
			redirect('');
		}
		elseif($page=="add_comment_sql") {
			$this->load->model('comment_model');
			$this->comment_model->insert_entry();
			$this->load->helper('url');
			redirect('');
		}
		elseif ($page == "movie_view") {
			
		}
	
		$this->load->model('blog_model');
		
		$array['movies'] = $this->blog_model->content();
		$array["page"] = ($page != null ? $page : "movie_view");
		
		$this->load->view('blog_view',$array);
		
	}
	

	public function login() {
		$this->load->helper('url');
		$this->load->model('user_model');
		$login = $this->user_model->login();
		If($login>0) {
			$_SESSION["login"] = true;
			$_SESSION["user"] = $this->input->post('nickname');
		}
		redirect('');
	}


	public function logout() {
		$_SESSION["login"] = false;
		$_SESSION["user"] = null;
		$this->load->helper('url');
		redirect('');
	}
}
?>