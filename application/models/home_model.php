<?php

/**
 * 
 */
class Home_model extends CI_Model
{
        
        public function __construct()
        {
            parent::__construct();

        }


        public function search_user($name, $location,$skill){
            $this->db->select('*');
            $this->db->from('hair_stylists');
            $this->db->join('city', 'city.city_id=hair_stylists.hs_city_id');
            $this->db->join('rating','rating.rate_id=hair_stylists.hs_rate_id');
            $this->db->join('hair_stylist_skills','hair_stylist_skills.hs_id = hair_stylists.hs_id');
            $this->db->join('skills','skills.skill_id = hair_stylist_skills.skill_id');
            if(!empty($name)) {

                $this->db->group_start();
                $this->db->like('hs_first_name', $name);
                $this->db->or_like('hs_last_name', $name);
                $this->db->group_end();
            }
            $this->db->like('city_name', $location);
            $this->db->like('skill_name',$skill);
            $query = $this->db->get();  
            return $query->result_array();
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

        public function view_profile_model($id){
            $this->db->select('hair_stylists.*, city.city_name, rating.rate');
            $this->db->from('hair_stylists');
            $this->db->join('city', 'city.city_id=hair_stylists.hs_city_id');
            $this->db->join('rating','rating.rate_id=hair_stylists.hs_rate_id');
            $this->db->where('hair_stylists.hs_id',$id);
            $query = $this->db->get();
            return $query->result_array();
        }

        public function load_skill($id){
            $this->db->select('skills.*,hair_stylists.hs_first_name,hair_stylists.hs_last_name');
            $this->db->from('hair_stylist_skills');
            $this->db->join('hair_stylists','hair_stylist_skills.hs_id = hair_stylists.hs_id');
            $this->db->join('skills','hair_stylist_skills.skill_id = skills.skill_id');
            $this->db->where('hair_stylists.hs_id',$id);
            $query = $this->db->get();
            return $query->result_array();
        }

        public function feedback($id){
            $this->db->select('hair_stylist_feedback.*,salon_owners.so_first_name,salon_owners.so_last_name,salon_owners.so_prof_img'); 
            $this->db->from('salon_owners');   
            $this->db->join('hair_stylist_feedback','hair_stylist_feedback.so_id = salon_owners.so_id');
            $this->db->join('hair_stylists','hair_stylist_feedback.hs_id = hair_stylists.hs_id');
            $this->db->where('hair_stylists.hs_id',$id);
            $query = $this->db->get();
            return $query->result_array();
        }
}
