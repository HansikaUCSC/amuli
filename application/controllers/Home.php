<?php

class Home extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('home_model');

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

}
?>