<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jobs extends CI_Controller {

    function __construct() {
        parent::__construct();

        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('jobs_m');
        $this->load->model('province_m');
        $this->load->model('category_m');
        $this->load->model('country_m');
        $this->load->model('experience_m');
        $this->load->model('education_m');
        /* ------------------ */

        $this->load->library('grocery_CRUD');

        /* loading side bars */
       $data['provinces'] = $this->province_m->get_provinces();
       $data['category'] = $this->category_m->get_category(); 
       $data['country'] = $this->country_m->get_country();   
       $data['experience'] = $this->experience_m->get_experience();  
       $data['education'] = $this->education_m->get_education();  
       
       $data['category_options'] = $this->province_m->category_options();
        $this->load->vars($data);
    }

    public function index($query_id = 0) {
        //echo "<h1>Welcome to the world of Codeigniter</h1>"; //Just an example to ensure that we get into the function
        //die();
        
        $data['jobs'] = $this->jobs_m->get_jobs();
        //var_dump($data['jobs']);
       //die();
          
        $this->load->view('admin/components/page_head');
        $this->load->view('jobs/index', $data);
        $this->load->view('admin/components/page_tail');
    }
    
     public function get_provinces($id)
      {
                    
                  
            $data['jobs'] = $this->jobs_m->get_province($id);
            
           //var_dump($data);
           //die();
          $this->load->view('admin/components/page_head');
        $this->load->view('jobs/index', $data);
        $this->load->view('admin/components/page_tail');
 }
 
      public function get_category($id)
      {
                    
              
            $data['jobs'] = $this->jobs_m->get_category($id);
            
           //var_dump($data);
           //die();
          $this->load->view('admin/components/page_head');
        $this->load->view('jobs/index', $data);
        $this->load->view('admin/components/page_tail');
 }
 
       public function get_country($id)
      {
                    
                   
            $data['jobs'] = $this->jobs_m->get_country($id);
            
           //var_dump($data);
           //die();
          $this->load->view('admin/components/page_head');
        $this->load->view('jobs/index', $data);
        $this->load->view('admin/components/page_tail');
 }
 
        public function get_experience($id)
      {
                    
                   
            $data['jobs'] = $this->jobs_m->get_experience($id);
            
           //var_dump($data);
           //die();
          $this->load->view('admin/components/page_head');
        $this->load->view('jobs/index', $data);
        $this->load->view('admin/components/page_tail');
 }
 
 
         public function get_education($id)
      {
                    
                   
            $data['jobs'] = $this->jobs_m->get_education($id);
            
           //var_dump($data);
           //die();
          $this->load->view('admin/components/page_head');
        $this->load->view('jobs/index', $data);
        $this->load->view('admin/components/page_tail');
 }
 
 	function search() {
		
		$query_array = array(
			'title' => $this->input->post('title'),
			'category' => $this->input->post('category'),
					);
		
		$query_id = $this->input->save_query($query_array);
		
		redirect("jobs/$query_id");
		
	}
 

    /*
      public function employees()
      {
      $this->grocery_crud->set_table('jobs');
      $output = $this->grocery_crud->render();

      $this->_example_output($output);
      }
     */

    function jobs_management() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('jobs')
                ->columns('title', 'date_posted', 'province');

        $crud->set_relation('province', 'province', 'province');
        $crud->set_relation('city', 'city', 'city');
        $crud->set_relation('country', 'country', 'country');
        $crud->set_relation('job_categories', 'job_categories', 'job_categories');
        $crud->set_relation('education_level', 'education_level', 'education_level');
        $crud->set_relation('experience_level', 'experience_level', 'experience_level');

        $output = $crud->render();

        $this->_example_output($output);
    }

    function _example_output($output = null) {
        $this->load->view('our_template.php', $output);
    }

    public function listings() {
        $data['jobs'] = $this->jobs_m->get_jobs();
        
        var_dump($data);
        die();


        
                // pagination
		$this->load->library('pagination');
		$config = array();
		 $config['base_url'] = 'http://localhost:8080/info-age/index.php/jobs/listings';
		$config['total_rows'] = 200;
		$config['per_page'] = 20;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

        $this->load->view('jobs/index', $data);
    }

    /*
      public function view($id)
      {
      $data['jobs'] = $this->jobs_m->get_jobs($id);
      }
     * 
     *     /*
     */

    public function viewone($id) {
        $data['job_item'] = $this->jobs_m->get_jobs($id);

        if (empty($data['job_item'])) {
            show_404();
        }

        $this->load->view('jobs/view', $data);
    }
    
        public function view($id) {
            
        
        $data['job'] = $this->jobs_m->get_job($id);
        var_dump($data);
        die();

    }

    /*
      function listings() {
      //$data['listings'] = $this->jobs_m->get_all();

      $data['listings'] = $this->jobs_m->get_listings();
      //$data['listings'] = $this->jobs_m->get_listings($this->uri->segment(3));
      //$this->load->view('listings', $data);
      $this->load->view('jobs', $data);
      //var_dump($data);
      }

      /*
      public function details($id) {
      $data['details'] = $this->jobs_m->get($id);
      $this->load->view('job', $data);
      //var_dump($data);
      }


      public function details($id) {
      $data['details'] = $this->jobs_m->get($id);

      if (empty($data['details'])) {
      show_404();
      }

      $this->load->view('job', $data);
      }
     */

    function details() {
        $data['details'] = $this->jobs_m->get_details($this->uri->segment(3));
        $this->load->view('job', $data);
    }

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
 