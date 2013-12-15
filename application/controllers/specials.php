<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Specials extends CI_Controller {

    function __construct() {
        parent::__construct();

        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('specials_m');
        $this->load->model('specials_categories_m');

        /* ------------------ */

        $this->load->library('grocery_CRUD');

        /* loading side bars */
        $data['specials_categories'] = $this->specials_categories_m->specials_categories();
        //$this->load->vars($data);
    }

    public function index() {
        //echo "<h1>Welcome to the world of Codeigniter</h1>"; //Just an example to ensure that we get into the function
        //die();
        $data['specials_categories'] = $this->specials_categories_m->specials_categories();
        $data['specials'] = $this->specials_m->get_specials();
        //var_dump($data);
        //die();

        $this->load->view('admin/components/page_head');
        $this->load->view('specials/index', $data);
        $this->load->view('admin/components/page_tail');
    }

    public function get_specials_categories($id) {

        //$data['jobs'] = $this->jobs_m->get_categories($id);
        $data['specials_categories'] = $this->specials_categories_m->specials_categories();
        $data['specials'] = $this->specials_m->get_specials_categories($id);
        //var_dump($data);
        //die();

        $this->load->view('admin/components/page_head');
        $this->load->view('specials/index', $data);
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

    function specials_management() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('specials')
                ->columns('name', 'description', 'file_name', 'category', 'hyperlink');


        $crud->set_field_upload('file_name', 'assets/uploads/files');
        $crud->set_relation('category', 'specials_categories', 'category');


        $output = $crud->render();

        $this->_example_output($output);
    }

    function _example_output($output = null) {
        $this->load->view('our_template.php', $output);
    }

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
 