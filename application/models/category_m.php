<?php

class Category_m extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function get_category() {
        $data = array();

        $this->db->order_by('job_categories_id', 'asc');
        $q = $this->db->get('job_categories');

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}
