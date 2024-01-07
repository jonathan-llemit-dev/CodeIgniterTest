<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }


    public function index()
	{

        if ($this->session->userdata('logged_in')) {
            $data['first_name'] = $this->session->userdata('first_name');
            $data['last_name'] = $this->session->userdata('last_name');
            $data['birthdate'] = $this->session->userdata('birthdate');
            $data['gender'] = $this->session->userdata('gender');
            $data['email'] = $this->session->userdata('userEmail');
            $this->load->view('dashboard', $data);
        } else {
            redirect('login');
        }

	}

}