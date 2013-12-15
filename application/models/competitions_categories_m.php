<?php

class Competitions_categories_m extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

function competitions_categories() {
        $data = array();

        $this->db->order_by('competitions_cat_ID', 'asc');
        $q = $this->db->get('competitions_categories');

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}
