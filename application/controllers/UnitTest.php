<?php

/**
 * 
 */
class UnitTest extends CI_Controller {
        public function __construct()
        {
            parent::__construct(); 
			$this->load->library("unit_test");	
        }
		
		
		public function test_search_user(){
			echo "here";
			exit();
			$this->form_validation->set_rules('skill','skill_name','required');

			if ($this->form_validation->run() == False) {
				$this->load->view('error_msg');
				$this->index();
			}
			else{

				$name = $this->input->post('name');
				$location = $this->input->post('location');
				$skill = $this->input->post('skill');

				$expected_result = "";
				$test_name = "Name test function";
				echo $this->unit->run($name,$expected_result,$test_name);

				// $rating = $this->input->post('rate');
				// $price = $this->input->post('price');
		        // $query = $this->search_result_model->search_user($name,$location,$skill);
		        // $data['cities'] = $this->home_model->dropdown_location();
		        // $data['skills'] = $this->home_model->dropdown_skill();
		        // $data['ratings'] = $this->home_model->dropdown_rating();
		        // $data['search_result'] = null;
		        // if ($query) {
		        // 	$data['search_result'] = $query;
		        // 	$this->load->view('nav');
		        // 	$this->load->view('search_result',$data);
		        // 	$this->load->view('footer');
		        // }else {
		        // 	$this->load->view('nav');
		        // 	$this->load->view('search_result',$data);
		        // 	$this->load->view('footer');	        
		        // }
		    }
		}
		
		public function index(){
			echo "Using Unit Test Library";	
			$test = $this->division(6,3);
			$expected_result = 4;
			$test_name = "Division test function";
			echo $this->unit->run($test,$expected_result,$test_name);
		}
}	

?>