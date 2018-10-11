<?php

class Home_model extends CI_Model
{
        
        public function __construct()
        {
            parent::__construct();

        }

        public function testimonial(){
            $this->db->select('testimonials.*,hair_stylists.hs_first_name,hair_stylists.hs_last_name,hair_stylists.hs_prof_img'); 
            $this->db->from('testimonials');
            $this->db->join('hair_stylists','testimonials.hs_id = hair_stylists.hs_id','left outer');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function dropdown_location(){
            $query = $this->db->get('city');
            return $query->result_array();
        }

        public function dropdown_skill(){
            $query = $this->db->get('skills');
            return $query->result_array();
        }

        
}
