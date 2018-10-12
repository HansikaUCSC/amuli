<?php

class View_profile_model extends CI_Model
{
        
        public function __construct()
        {
            parent::__construct();

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

        public function gallery($id){
            $this->db->select('hair_stylist_gallery.*');
            $this->db->from('hair_stylist_gallery');
            $this->db->join('hair_stylists','hair_stylists.hs_id = hair_stylist_gallery.hs_id');
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

?>