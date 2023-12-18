<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentsController extends CI_Controller
{
    // simple function that gets the data fron model
    public function index()
	{

        $this->load->model('StudentModel');

        $studentName = new StudentModel;

        $studentName = $studentName->student_name();

        echo $studentName;

		// $this->load->view('students', $studentName);
	}

    // simple function that uses a model that accepts parameter
    public function gender($genderId)
	{

        $this->load->model('StudentModel');

        $studentGender = new StudentModel;

        $studentGender = $studentGender->student_gender($genderId);

        echo $studentGender;

	}

    // function that accepts parameter to use on model, get data from model, and display it on view
    public function studentView($genderId)
	{

        $this->load->model('StudentModel');

        $StudentModel = new StudentModel;

        $studentName = $StudentModel->student_name();
        $studentGender = $StudentModel->student_gender($genderId);

        $data['studentName'] = $studentName;
        $data['studentGender'] = $studentGender;

		$this->load->view('students', $data);
	}

}