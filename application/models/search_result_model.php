<?php

class Search_result_model extends CI_Model
{
        
        public function __construct()
        {
            parent::__construct();

        }

        public function search_user($name, $location,$skill,$rating,$price){
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
            $this->db->like('rate',$rating);
            $this->db->like('hs_price',$price);
            $query = $this->db->get();  
            return $query->result_array();
        }

        // public function sec_search_user($name, $location,$skill,$rating,$price){
        //     $this->db->select('*');
        //     $this->db->from('hair_stylists');
        //     $this->db->join('city', 'city.city_id=hair_stylists.hs_city_id');
        //     $this->db->join('rating','rating.rate_id=hair_stylists.hs_rate_id');
        //     $this->db->join('hair_stylist_skills','hair_stylist_skills.hs_id = hair_stylists.hs_id');
        //     $this->db->join('skills','skills.skill_id = hair_stylist_skills.skill_id');
        //     if(!empty($name)) {

        //         $this->db->group_start();
        //         $this->db->like('hs_first_name', $name);
        //         $this->db->or_like('hs_last_name', $name);
        //         $this->db->group_end();
        //     }
        //     $this->db->like('city_name', $location);
        //     $this->db->like('skill_name',$skill);
        //     $this->db->like('rate',$rating);
        //     $this->db->like('hs_price',$price);
        //     $query = $this->db->get();  
        //     return $query->result_array();
        // }
}

?>