<?php

class ViewProfile extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('view_profile_model');

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