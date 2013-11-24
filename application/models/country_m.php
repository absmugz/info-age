<?php

class Country_m extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function get_country() {
        $data = array();

        $this->db->order_by('country_id', 'asc');
        $q = $this->db->get('country');

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}
