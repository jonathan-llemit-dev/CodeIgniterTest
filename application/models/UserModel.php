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

  public function authenticate($user_email, $password) {
    // Fetch user from the database based on the provided username
    $query = $this->db->get_where('users', array('user_email' => $user_email));

    if ($query->num_rows() > 0) {
        $user = $query->row();

        // Verify the password (you should use a more secure method, like password_hash())
        if (password_verify($password, $user->password)) {
            // Password is correct, return true
            return true;
        }
    }

    // Authentication failed
    return false;
  }

}

/* End of file UserModel_model.php */
/* Location: ./application/models/UserModel_model.php */