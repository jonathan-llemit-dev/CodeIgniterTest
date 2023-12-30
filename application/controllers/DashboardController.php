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

        $this->load->view('dashboard');

	}

}