<!-- model user -->
<?php

class Model_user extends CI_Model
{

    /**
     * Descripsi    : Mendapat Semua Users
     * Input        : Int -> limit 
     * Return       : array associative -> Semua Users Dan Data nya
     */
    public function get_users($max = 0)
    {
        return $this->db->get('users', $max)->result_array();
    }

    /**
     * Descripsi    : Mendapat Semua Data user berdasarkan email
     * Input        : String -> email
     * Return       : array associative -> Data User
     */
    public function get_all_from_email($email)
    {
        return $this->db->get_where('users', ['email' => $email])->row_array();
    }

    /**
     * Descripsi    : mengambil satu user data dari table users
     * Input        : String -> id
     * Return       : Array Assosiative -> Data User
     */
    public function get_all_from_id($id)
    {
        return $this->db->get_where('users', ['user_id' => $id])->row_array();
    }

    /**
     * Descripsi    : mengambil satu user data dari table user
     * Input        : String -> id
     * Return       : Object -> Data User 
     */
    public function get_all_from_id_2($id)
    {
        $query = $this->db->get_where('users', ['user_id' => $id])->result();
        return $query[0];
    }

    /**
     * Descripsi    : menginsert array assosiative ke dalam database users
     * Input        : Array Associative
     * Return       : tidak ada
     */
    public function insert($data)
    {
        $this->db->insert('users', $data);
    }

}
