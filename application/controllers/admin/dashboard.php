<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.

  class Dashboard extends Admin_Controller {

  public function __construct(){
  parent::__construct();
  }

  public function index() {
  $this->load->view('admin/_layout_main', $this->data);
  }

  public function modal() {
  $this->load->view('admin/_layout_modal', $this->data);
  }
  } */

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
public function index() {
  //$this->load->view('admin/_layout_main', $this->data);
  $this->load->view('admin/components/admin_page_head');
  $this->load->view('admin/components/dashboard');
  $this->load->view('admin/components/admin_page_tail');
  
  }
}