<?php

class Matric_m extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
        public function get_matric() {

        $this->db->select('*')
                ->from('matric_resources')
                ->join('subjects', 'subjects.subject_ID = matric_resources.subject');
        //->where('jobs.id');
        //->where('jobs.id', 'SET id');
        $query = $this->db->get();
        return $query->result();
    }
    
            public function get_matric_subjects($id) {

        $this->db->select('*')
                ->from('matric_resources')
                ->join('subjects', 'subjects.subject_ID = matric_resources.subject')
                ->where('matric_resources.subject', $id);
        //->where('jobs.id');
        //->where('jobs.id', 'SET id');
        $query = $this->db->get();
        return $query->result();
    }
} 