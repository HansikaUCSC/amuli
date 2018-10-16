<?php

class Home extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model('home_model');
		$this->load->model('search_result_model');
		$this->load->model('view_profile_model');
	}
	// load home page

	public function index()
	{
		$query = $this->home_model->testimonial(); 
	   	$data['testimonial'] = null;
	   	if ($query) {
	   		$data['testimonial'] = $query;
	   		$this->load->view('nav');
	   		$this->load->view('slider');
	   		$this->load_dropdowns();
	   		$this->load->view('testimonials.php',$data);
	   		$this->load->view('footer'); 
	   	}
	   	else{
	   		return false;
	   	}

	}
	public function load_dropdowns(){
		$data['cities'] = $this->home_model->dropdown_location();
		$data['skills'] = $this->home_model->dropdown_skill();
		$this->load->view('home',$data);
	}

	// laod search result page (primary & secondary search)
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
			$rating = $this->input->post('rate');
			$price = $this->input->post('price');
	        $query = $this->search_result_model->search_user($name,$location,$skill,$rating,$price);
	        $data['cities'] = $this->home_model->dropdown_location();
	        $data['skills'] = $this->home_model->dropdown_skill();
	        $data['ratings'] = $this->home_model->dropdown_rating();
	        $data['search_result'] = null;
	        if ($query) {
	        	$data['search_result'] = $query;
	        	$this->load->view('nav');
	        	$this->load->view('search_result',$data);
				$this->load->view('footer');
	        }else {
	        	$this->load->view('nav');
	        	$this->load->view('search_result',$data);
	        	$this->load->view('footer');	        
	        }
	    }
	}


	// load view profile page
	public function view_profile($id){
		$query = $this->view_profile_model->view_profile_model($id);
		$query_skill = $this->view_profile_model->load_skill($id);
		$query_gallery = $this->view_profile_model->gallery($id);
		if ($query) {
			$data['profile'] = $query;
			$data['skill'] = $query_skill;
			$data['ld_gallery'] = $query_gallery;
			$this->load->view('nav');
			$this->load->view('profile_page',$data);
			$this->availabale_status($id);
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

	// load status
	public function availabale_status($id){
		$query = $this->view_profile_model->avl_status($id);
		$data['status'] = null;
		if ($query) {
			$data['status'] = $query;
			$this->load->view('availability_table',$data);
		}
		else{
			return false;
		}
	}

}
?>