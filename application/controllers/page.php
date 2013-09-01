<?php

class Page extends Frontend_Controller {

public function __construct() {
parent::__construct();
$this->load->model('page_m');
}

public function index() {
    
    //$pages = $this->page_m->get_all();
    //$pages = $this->page_m->get(1);
    $pages = $this->page_m->get_by('slug', 'about');
    var_dump($pages);
    
}


}


