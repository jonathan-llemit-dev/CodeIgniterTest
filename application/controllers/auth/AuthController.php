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

        $this->form_validation->set_rules('firstName', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('lastName', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('birthDate', 'Birth Date', 'required|callback_check_age');
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

	public function check_age($birthdate) {
		// Convert birthdate to DateTime object
		$birthdate = new DateTime($birthdate);
	
		// Calculate age
		$today = new DateTime();
		$age = $today->diff($birthdate)->y;
	
		// Check if age is at least 18
		if ($age < 18) {
			$this->form_validation->set_message('check_age', 'You must be at least 18 years old.');
			return false;
		}
	
		return true;
	}

}
