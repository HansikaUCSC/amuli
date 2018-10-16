<?php

/**
 * 
 */
class UnitTest extends CI_Controller {
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
		$this->test_dropdown_city($data);
		$data['skills'] = $this->home_model->dropdown_skill();
		$s_data_return['skills'] = $this->home_model->dropdown_skill();
		$this->test_dropdown_skill($s_data_return);
		$this->load->view('home',$data);
	}


	// Unit Test
	// test case 2
	// test city dropdown
	public function test_dropdown_city($c_data_return){
		foreach ($c_data_return as $city =>$city_names){
			foreach($city_names as $city_name){
				
				$test[] = (string) $city_name['city_name'];
			}
			$expected_result = array('NewYork','LosAngeles','SanFrancisco','Chicago','Boston','Atlanta','Philadelphia','Seattle','Portland','Detroit','Austin');
			$test_name = "check location";
			$this->unit->run($test,$expected_result,$test_name);
			echo $this->unit->report();
		}
		
		// exit;
	}

	// Unit Test
	// test case 3
	// test skill dropdown
	public function test_dropdown_skill($s_data_return){
		foreach ($s_data_return as $skill =>$skill_names){
			foreach($skill_names as $skill_name){
				
				$test[] = (string) $skill_name['skill_name'];
				
			}
			$expected_result = array('Cut Styling','Hair Braiding','Hair Coloring','Hair Extensions','Hair Layering','Hair Texturing','Heat Styling','Straightening and Perming','Brow and Lash Tinting','Deep Conditioning Treatments');
			$test_name = "check skill";
			$this->unit->run($test,$expected_result,$test_name);
			echo $this->unit->report();
		}
		
		// exit;
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
			$primary_inputs = array($name,$location,$skill);
			$this->test_primary_search($primary_inputs);
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

	// Unit Test
	// test case 1
	// test primary search passing data
	public function test_primary_search($primary_inputs){
		$test = $primary_inputs;
		$expected_result = array('Hansika','NewYork','Cut Styling');
		$test_name = "Input all";
		$this->unit->run($test,$expected_result,$test_name);

		$test = $primary_inputs;
		$expected_result = array('Hansika',null,'Cut Styling');
		$test_name = "Input only name & skill";
		$this->unit->run($test,$expected_result,$test_name);

		$test = $primary_inputs;
		$expected_result = array(null,'NewYork','Cut Styling');
		$test_name = "Input only city & skill";
		$this->unit->run($test,$expected_result,$test_name);

		$test = $primary_inputs;
		$expected_result = array(null,null,'Cut Styling');
		$test_name = "Input only skill";
		$this->unit->run($test,$expected_result,$test_name);

		$test = $primary_inputs;
		$expected_result = array('an','NewYork','Cut Styling');
		$test_name = "Input one or two letter for the name";
		$this->unit->run($test,$expected_result,$test_name);

		echo $this->unit->report();
		// exit;
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
			   $this->test_feedback($id);
	   	}
	   	else{
	   		return false;
	   	}
	}

	// Unit Test
	// test case 4
	// test feedback
	public function test_feedback($id){
		$test = $id ;
		$expected_result = "1";
		$test_name = "Check the Schedule";
		echo $this->unit->run($test,$expected_result,$test_name);
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