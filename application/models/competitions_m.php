<?php

class Competitions_m extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_competitions() {

        $this->db->select('*')
                ->from('competitions')
                ->join('competitions_categories', 'competitions_categories.competitions_cat_ID = competitions.category');
        //->where('jobs.id');
        //->where('jobs.id', 'SET id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_competitions_categories($id) {

        $this->db->select('*')
                ->from('competitions')
                ->join('competitions_categories', 'competitions_categories.competitions_cat_ID = competitions.category')
                ->where('competitions.category', $id);
        //->where('jobs.id');
        //->where('jobs.id', 'SET id');
        $query = $this->db->get();
        return $query->result();
    }

}

