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


	


}

?>