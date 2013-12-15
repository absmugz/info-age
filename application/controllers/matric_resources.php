<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Matric_resources extends CI_Controller {

    function __construct() {
        parent::__construct();

        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('matric_m');
         $this->load->model('subjects_m');
        
        /* ------------------ */

        $this->load->library('grocery_CRUD');

        /* loading side bars */
        //$data['province'] = $this->province_m->get_provinces();
        //$this->load->vars($data);
    }

    public function index() {
        //echo "<h1>Welcome to the world of Codeigniter</h1>"; //Just an example to ensure that we get into the function
        //die();
        $data['matric_subjects'] = $this->subjects_m->matric_subjects();
         $data['matric'] = $this->matric_m->get_matric();
        //var_dump($data);
        //die();

        $this->load->view('admin/components/page_head');
        $this->load->view('matric/index', $data);
        $this->load->view('admin/components/page_tail');
    }
    
  
        public function get_matric_subjects($id) {
        //echo "<h1>Welcome to the world of Codeigniter</h1>"; //Just an example to ensure that we get into the function
        //die();
        $data['matric_subjects'] = $this->subjects_m->matric_subjects();
         $data['matric'] = $this->matric_m->get_matric_subjects($id);
        //var_dump($data);
        //die();

        $this->load->view('admin/components/page_head');
        $this->load->view('matric/index', $data);
        $this->load->view('admin/components/page_tail');
    }

    /*
      public function employees()
      {
      $this->grocery_crud->set_table('jobs');
      $output = $this->grocery_crud->render();

      $this->_example_output($output);
      }
     */

    function matric_management() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('matric_resources')
                ->columns('name', 'subject', 'file_name');

        
        $crud->set_field_upload('file_name','assets/uploads/files');
        $crud->set_relation('subject', 'subjects', 'subject');
        

        $output = $crud->render();

        $this->_example_output($output);
    }

    function _example_output($output = null) {
        $this->load->view('our_template.php', $output);
    }


}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
 