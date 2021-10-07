<!-- model user -->
<?php

class Model_user extends CI_Model
{

    // GET
    public function get_users($max = 0)
    {
        return $this->db->get('users', $max)->result_array();
    }

    public function get_all_from_email($email)
    {
        return $this->db->get_where('users', ['email' => $email])->row_array();
    }

    public function get_all_from_id($id)
    {
        return $this->db->get_where('users', ['user_id' => $id])->row_array();
    }

    //insert
    public function insert($data)
    {
        $this->db->insert('users', $data);
    }

}
