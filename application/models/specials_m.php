<?php

class Specials_m extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_specials() {

        // results query
        //$this->db->select('*');
        //$this->db->from('jobs');
        //$this->db->join('colour', 'colour.id = shoes.colour');
        //$query = $this->db->get();
        //return $query->result_array();
        //$ret['rows'] = $q->result_array();
        //eturn $ret;

        $this->db->select('*')
                ->from('specials')
                ->join('specials_categories', 'specials_categories.specials_cat_ID = specials.category');
        //->where('jobs.id');
        //->where('jobs.id', 'SET id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_specials_categories($id) {

        $this->db->select('*')
                ->from('specials')
                ->join('specials_categories', 'specials_categories.specials_cat_ID = specials.category')
                ->where('specials.category', $id);
        //->where('jobs.id');
        //->where('jobs.id', 'SET id');
        $query = $this->db->get();
        return $query->result();
    }

}