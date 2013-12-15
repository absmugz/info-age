<?php

class Subjects_m extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function matric_subjects() {
        $data = array();

        $this->db->order_by('subject_ID', 'asc');
        $q = $this->db->get('subjects');

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}
