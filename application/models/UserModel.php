<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function insert_data($data)
  {

    $this->db->insert('users', $data);

  }

}

/* End of file UserModel_model.php */
/* Location: ./application/models/UserModel_model.php */