<?php

class Model_posting extends CI_Model
{

    public function insert_to_post($n)
    {
        return $this->db->insert("post", $n);
    }

    public function insert_to_likes($n)
    {
        return $this->db->insert("post", $n);
    }

    public function insert_to_comment($n)
    {
        return $this->db->insert("post", $n);
    }

    public function get_likes_id()
    {
        return $this->db->getwhere();
    }

    public function get_all_post($id)
    {
        return $this->db->query("SELECT * FROM post WHERE id=$id ORDER BY date DESC")->result_array();
    }
}
