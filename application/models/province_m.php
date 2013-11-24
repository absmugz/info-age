<?php

class Province_m extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function get_provinces() {
        $data = array();

        $this->db->order_by('province_Id', 'asc');
        $q = $this->db->get('province');

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function category_options() {

        $rows = $this->db->select('province')
                        ->from('province')
                        ->get()->result();

        $category_options = array('' => '');
        foreach ($rows as $row) {
            $category_options[$row->province] = $row->province;
        }

        return $category_options;
    }

}
