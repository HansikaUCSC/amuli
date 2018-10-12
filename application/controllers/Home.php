<?php

class Home extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('search_result_model');
		$this->load->model('view_profile_model');

	}

	public function index()
	{
		$query = $this->home_model->testimonial(); 
	   	$data['use'] = null;
	   	if ($query) {
	   		$data['use'] = $query;
	   		$this->load->view('nav');
	   		$this->load->view('slider');
	   		$this->location();
	   		$this->load->view('testimonials.php',$data);
	   		$this->load->view('footer'); 
	   	}
	   	else{
	   		return false;
	   	}

	}

	public function location(){
		$data['cities'] = $this->home_model->dropdown_location();
		$data['skills'] = $this->home_model->dropdown_skill();
		$this->load->view('home',$data);
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

	public function view_profile($id){
		$query = $this->view_profile_model->view_profile_model($id);
		$query1 = $this->view_profile_model->load_skill($id);
		if ($query) {
			$data['profile'] = $query;
			$data['skill'] = $query1;
			$this->load->view('nav');
			$this->load->view('profile_page',$data);
			$this->load->view('calendar');
			$this->feedback($id);
			$this->load->view('footer');
		}
	}

	public function feedback($id){
		$query = $this->view_profile_model->feedback($id); 
	   	$data['cus_feedback'] = null;
	   	if ($query) {
	   		$data['cus_feedback'] = $query;
	   		$this->load->view('feedback',$data);
	   	}
	   	else{
	   		return false;
	   	}
	}

}
?>