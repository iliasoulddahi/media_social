<?php

class Model_friend extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
    }
    public function update_to_friend_list($id, $arr)
    {
        $data = implode(',', $arr);

        $this->db->query("UPDATE users SET friend_list='$data' WHERE id=$id");
    }
    public function get_all_friend($id)
    {
        $query = explode(
            ',',
            $this->db->query("SELECT friend_list FROM users WHERE id=$id")->result_array()[0]["friend_list"]
        );

        return $query;
    }

    public function insert_to_friend_request($requester_id, $receiver_id)
    {
        $time = time();
        return $this->db->query("INSERT INTO friend_request (requester_id, receiver_id ) VALUES ('$requester_id', '$receiver_id')");
    }

    public function get_requester_id(){
        return $this->db->query("SELECT id_requester FROM friend_request WHERE ");
    }

    public function search_friend($keyword){
        // return $this->db->query("SELECT username FROM users WHERE username='$username'")->result_array();
        return $this->db->query("SELECT * FROM users WHERE username LIKE '%$keyword%'")->result();
    }
}
