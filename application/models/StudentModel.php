<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model {

  public function student_name()
  {
    return $name = "Jonathan";
  }

  public function student_gender($id)
  {

    if($id == 1){
      return $gender = "male";
    }elseif($id == 2){
      return $gender = "female";
    }else{
      return $gender = "none";
    }

  }

  public function get_data() {

    $query = $this->db->get('students');
    return $query->result();

  }

  public function insert_data($data)
  {

    $this->db->insert('students', $data);

  }

  public function get_student_by_id($student_id) {

    $query = $this->db->get_where('students', array('id' => $student_id));
    return $query->row();

  }

  public function update_student($student_id, $data) {

    $this->db->where('id', $student_id);
    $this->db->update('students', $data);

  }

  public function delete_student($student_id) {

    $this->db->where('id', $student_id);
    $this->db->delete('students');
    
  }

}

/* End of file StudentModel_model.php */
/* Location: ./application/models/StudentModel_model.php */