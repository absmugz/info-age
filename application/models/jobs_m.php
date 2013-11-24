<?php

class Jobs_m extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_jobs() {

        // results query
        //$this->db->select('*');
        //$this->db->from('jobs');
        //$this->db->join('colour', 'colour.id = shoes.colour');
        //$query = $this->db->get();
        //return $query->result_array();
        //$ret['rows'] = $q->result_array();
        //eturn $ret;

        $this->db->select('*')
                ->from('jobs')
                ->join('province', 'province.province_Id = jobs.province')
                ->join('city', 'city.city_Id = jobs.city')
                ->join('country', 'country.country_id = jobs.country')
                ->join('job_categories', 'job_categories.job_categories_id = jobs.job_categories')
                ->join('education_level', 'education_level.education_level_id = jobs.education_level')
                ->join('experience_level', 'experience_level.experience_level_id = jobs.experience_level');
        //->where('jobs.id');
        //->where('jobs.id', 'SET id');
        $query = $this->db->get();
        return $query->result();
    }

    function get_job($id) {
        //$this->db->select('*');
        //$this->db->from('shoes');
        $this->db->select('*')
                ->from('jobs')
                ->join('province', 'province.province_Id = jobs.province')
                ->join('city', 'city.city_Id = jobs.city')
                ->join('country', 'country.country_id = jobs.country')
                ->join('job_categories', 'job_categories.job_categories_id = jobs.job_categories')
                ->join('education_level', 'education_level.education_level_id = jobs.education_level')
                ->join('experience_level', 'experience_level.experience_level_id = jobs.experience_level')
                ->where('jobs.id', $id);

        //$this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_province($id) {


        $this->db->select('*')
                ->from('jobs')
                ->join('province', 'province.province_Id = jobs.province')
                ->join('city', 'city.city_Id = jobs.city')
                ->join('country', 'country.country_id = jobs.country')
                ->join('job_categories', 'job_categories.job_categories_id = jobs.job_categories')
                ->join('education_level', 'education_level.education_level_id = jobs.education_level')
                ->join('experience_level', 'experience_level.experience_level_id = jobs.experience_level')
                ->where('jobs.province', $id);

        $query = $this->db->get();
        return $query->result();

        //$ret['rows'] = $q->result_array();
        //eturn $ret;
    }

    public function get_category($id) {


        $this->db->select('*')
                ->from('jobs')
                ->join('province', 'province.province_Id = jobs.province')
                ->join('city', 'city.city_Id = jobs.city')
                ->join('country', 'country.country_id = jobs.country')
                ->join('job_categories', 'job_categories.job_categories_id = jobs.job_categories')
                ->join('education_level', 'education_level.education_level_id = jobs.education_level')
                ->join('experience_level', 'experience_level.experience_level_id = jobs.experience_level')
                ->where('jobs.job_categories', $id);

        $query = $this->db->get();
        return $query->result();

        //$ret['rows'] = $q->result_array();
        //eturn $ret;
    }
    
        public function get_country($id) {


        $this->db->select('*')
                ->from('jobs')
                ->join('province', 'province.province_Id = jobs.province')
                ->join('city', 'city.city_Id = jobs.city')
                ->join('country', 'country.country_id = jobs.country')
                ->join('job_categories', 'job_categories.job_categories_id = jobs.job_categories')
                ->join('education_level', 'education_level.education_level_id = jobs.education_level')
                ->join('experience_level', 'experience_level.experience_level_id = jobs.experience_level')
                ->where('jobs.country', $id);

        $query = $this->db->get();
        return $query->result();

        //$ret['rows'] = $q->result_array();
        //eturn $ret;
    }
    
            public function get_experience($id) {


        $this->db->select('*')
                ->from('jobs')
                ->join('province', 'province.province_Id = jobs.province')
                ->join('city', 'city.city_Id = jobs.city')
                ->join('country', 'country.country_id = jobs.country')
                ->join('job_categories', 'job_categories.job_categories_id = jobs.job_categories')
                ->join('education_level', 'education_level.education_level_id = jobs.education_level')
                ->join('experience_level', 'experience_level.experience_level_id = jobs.experience_level')
                ->where('jobs.experience_level', $id);

        $query = $this->db->get();
        return $query->result();

        //$ret['rows'] = $q->result_array();
        //eturn $ret;
    }
    
                public function get_education($id) {


        $this->db->select('*')
                ->from('jobs')
                ->join('province', 'province.province_Id = jobs.province')
                ->join('city', 'city.city_Id = jobs.city')
                ->join('country', 'country.country_id = jobs.country')
                ->join('job_categories', 'job_categories.job_categories_id = jobs.job_categories')
                ->join('education_level', 'education_level.education_level_id = jobs.education_level')
                ->join('experience_level', 'experience_level.experience_level_id = jobs.experience_level')
                ->where('jobs.education_level', $id);

        $query = $this->db->get();
        return $query->result();

        //$ret['rows'] = $q->result_array();
        //eturn $ret;
    }

    /*
      public function get_jobs($id = FALSE) {
      if ($id === FALSE) {
      $this->db->select('*');
      //$this->db->select('jobs.id, jobs.title, jobs.city, jobs.province ,city.city,province.province');
      $this->db->from('jobs','city','province');

      //$this->db->select('*');
      //$this->db->from('jobs');
      $this->db->join('city', 'city.city_Id = jobs.city');
      $this->db->join('province', 'province.province_Id = jobs.province');
      $query = $this->db->get();
      //$query = $this->db->get('jobs');
      return $query->result_array();
      }

      $query = $this->db->get_where('jobs', array('id' => $id));
      return $query->row_array();
      }


      function get_listings() {
      $data = array();

      $this->db->order_by('id', 'desc');
      $q = $this->db->get('jobs');


      if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
      $data[] = $row;
      }
      }

      $q->free_result();
      return $data;
      }

      function get_listings($province) {
      $this->db->select('*');
      $this->db->from('jobs');
      $this->db->join('city', 'city.id = jobs.city');


      if ($province) {
      $options = array('province' => $province);
      $this->db->order_by('id', 'desc');
      $q = $this->db->get_where('jobs', $options);
      }
      else {
      $query = $this->db->get();
      }



      if ($query->num_rows() > 0) {
      foreach ($query->result_array() as $row) {
      $data[] = $row;
      }
      }

      $query->free_result();
      return $data;
      }

      function get_details($id) {
      $data = array();

      $options = array('id' => $id);
      $q = $this->db->get_where('jobs', $options, 1);

      if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
      $data = $row;
      }
      }

      $q->free_result();
      return $data;
      }
     */
}