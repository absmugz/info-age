<?php

class Users extends CI_Controller {

    function login() {
        $data['error'] = 0;
        if ($_POST) {
            $this->load->model('user');
            $username = $this->input->post('username', true); // similar to just writing $username = $_POST['username']
            $password = $this->input->post('password', true);
            $user = $this->user->login($username, $password);
            if (!$user) {
                $data['error'] = 1;
            } else {
                $this->session->set_userdata('userID', $user['userID']);
                //$this->session->set_userdata('user_type',$user['user_type']);
                //
				//redirect(base_url().'jobs/jobs_management/');

                redirect('http://localhost:8080/info-age/index.php/admin/dashboard');
            }
        }
        //$this->load->view('admin/components/page_head');
        $this->load->view('admin/login', $data);
        $this->load->view('admin/components/page_tail');
    }

    function logout() {
        $this->session->sess_destroy();
        //redirect(base_url().'jobs/jobs_management/');
        redirect('http://localhost:8080/info-age/index.php/jobs/listings');
    }

}