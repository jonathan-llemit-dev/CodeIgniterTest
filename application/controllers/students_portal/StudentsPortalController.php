<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentsPortalController extends CI_Controller
{

    public function __construct() {
        parent::__construct();

        $this->load->model('StudentModel');
        $this->load->library('session'); 
        
    }

    public function index()
	{

        $StudentModel = new StudentModel;
        $data['students'] = $StudentModel->get_data();

		$this->load->view('students_portal/students_table', $data);

	}

    public function create()
	{

		$this->load->view('students_portal/create');

	}

    public function store()
	{

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

    public function edit($student_id)
	{

        $StudentModel = new StudentModel;
        $data['student'] = $StudentModel->get_student_by_id($student_id);

		$this->load->view('students_portal/edit', $data);

	}

    public function update($student_id)
	{

        $StudentModel = new StudentModel;

        $data = [
            'student_name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
        ];

        $StudentModel->update_student($student_id, $data);

        $this->session->set_flashdata('updated', 'Student Updated!');

		return redirect('students_portal');

	}

    public function delete($student_id) {
        
        $StudentModel = new StudentModel;
        $StudentModel->delete_student($student_id);

        $this->session->set_flashdata('deleted', 'Student Removed!');

        return redirect('students_portal');
    }

}