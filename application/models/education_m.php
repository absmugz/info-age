<?php

class Education_m extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function get_education() {
        $data = array();

        $this->db->order_by('education_level_id', 'asc');
        $q = $this->db->get('education_level');

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}
