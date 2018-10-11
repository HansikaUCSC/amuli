<?php


class SearchResult extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('search_result_model');
		$this->load->library('../controllers/Home');
		$this->Home->index();
	}


	public function search_user(){
		$this->form_validation->set_rules('skill','skill_name','required');

		if ($this->form_validation->run() == False) {
			$this->load->view('error_msg');
			$this->index();
		}
		else{

			$name = $this->input->post('name');
			$location = $this->input->post('location');
			$skill = $this->input->post('skill');
	        $query = $this->search_result_model->search_user($name,$location,$skill);
	        $data['user'] = null;
	        if ($query) {
	        	$data['user'] = $query;
	        	$this->load->view('nav');
	        	$this->load->view('search_result',$data);
	        	$this->load->view('footer');
	        }else {
	        	$this->load->view('nav');
	        	$this->load->view('no_search_result');
	        	$this->load->view('footer');	        }
	    }
	}


}

?>