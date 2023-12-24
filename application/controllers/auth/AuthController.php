<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function index()
	{

		$this->load->view('auth/login');

	}

	public function register()
	{

		$this->load->view('auth/register');

	}

	public function store()
	{

        $this->load->library('form_validation'); 

        $this->form_validation->set_rules('name', 'Name', 'required|alpha');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required');

        if ($this->form_validation->run() == false) {

            return $this->create();

        }

        $StudentModel = new StudentModel;

        $data = [
            'student_name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
        ];

        $StudentModel->insert_data($data);

        $this->session->set_flashdata('created', 'New Student Added!');

		return redirect('students_portal');

	}

}
