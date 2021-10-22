<?php

class Model_friend extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
    }

    /**
     * Descripsi    : Mendapatkan requester id menggunakan reciever id
     * Input        : String -> reciever_id
     * Return       : String -> requester_id
     */
    public function get_requester_id($receiver_id)
    {
        return $this->db->query("SELECT requester_id FROM friend_request WHERE receiver_id=$receiver_id")->result_array();
    }

    /**
     * Descripsi    : menghapus row/record dari table friend request berdasrkan column request_id dan column reciever_id
     * Input        : String -> requester id 
     * Input 2      : String -> reciever id 
     * Return       : Tidak ada
     */
    public function delete_friend_request($requester_id, $receiver_id)
    {
        $this->db->query("DELETE FROM friend_request WHERE requester_id='$requester_id' AND receiver_id='$receiver_id'");
    }

    /**
     * Descripsi    : 
     * Input        : 
     * Input 2      :
     * Return       : 
     */
    public function insert_to_friendship($id1, $id2)
    {
        $this->db->query("INSERT INTO friendship (user_id1, user_id2 ) VALUES ('$id1', '$id2')");
        $this->db->query("INSERT INTO friendship (user_id1, user_id2 ) VALUES ('$id2', '$id1')");
    }

    /**
     * Descripsi    : 
     * Input        : 
     * Return       : 
     */
    public function get_all_friends($id)
    {
        $query = $this->db->query("SELECT user_id2 FROM friendship WHERE user_id1='$id' ORDER BY date_created DESC")->result_array();
        $result = [];
        for ($i = 0; $i < count($query); $i++) {
            array_push($result, $query[$i]['user_id2']);
        }
        return $result;
    }

    /**
     * Descripsi    : 
     * Input        : 
     * Return       : 
     */
    public function insert_to_friend_request($requester_id, $receiver_id)
    {
        if ($this->is_friend($requester_id, $receiver_id)) {
            return;
        }
        $this->db->query("INSERT INTO friend_request (requester_id, receiver_id ) VALUES ('$requester_id', '$receiver_id')");
    }

    /**
     * Descripsi    : 
     * Input        : 
     * Return       : 
     */
    public function search_friend($keyword)
    {
        // return $this->db->query("SELECT username FROM users WHERE username='$username'")->result_array();
        return $this->db->query("SELECT * FROM users WHERE username LIKE '%$keyword%'")->result();
    }

    /**
     * Descripsi    : 
     * Input        : 
     * Return       : 
     */
    public function is_friend($id1, $id2)
    {
        $query = $this->db->query("SELECT * FROM friendship WHERE user_id1='$id1' AND user_id2='$id2'")->result();
        if (count($query) < 1) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Descripsi    : 
     * Input        : 
     * Return       : 
     */
    public function is_added($sess_id, $profile_id)
    {
        $query = $this->db->query("SELECT * FROM friend_request WHERE requester_id='$sess_id' AND receiver_id='$profile_id'")->result();
        if (count($query) < 1) {
            return false;
        } else {
            return true;
        }
    }
}
