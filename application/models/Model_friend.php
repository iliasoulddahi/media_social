<?php

class Model_friend extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
    }


    public function get_requester_id($receiver_id)
    {
        return $this->db->query("SELECT requester_id FROM friend_request WHERE receiver_id=$receiver_id")->result_array();

    }




    public function insert_to_friendship($id1, $id2)
    {
        
    }
    
    
    public function get_all_friends($id)
    {

    }


    public function insert_to_friend_request($requester_id, $receiver_id)
    {
        return $this->db->query("INSERT INTO friend_request (requester_id, receiver_id ) VALUES ('$requester_id', '$receiver_id')");
    }

    public function search_friend($keyword){
        // return $this->db->query("SELECT username FROM users WHERE username='$username'")->result_array();
        return $this->db->query("SELECT * FROM users WHERE username LIKE '%$keyword%'")->result();
    }


}
