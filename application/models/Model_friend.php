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

    public function delete_friend_request($requester_id, $receiver_id)
    {
        $this->db->query("DELETE FROM friend_request WHERE requester_id='$requester_id' AND receiver_id='$receiver_id'");
    }




    public function insert_to_friendship($id1, $id2)
    {
        $this->db->query("INSERT INTO friendship (user_id1, user_id2 ) VALUES ('$id1', '$id2')");
        $this->db->query("INSERT INTO friendship (user_id1, user_id2 ) VALUES ('$id2', '$id1')");
    }
    
    
    public function get_all_friends($id)
    {
        $query = $this->db->query("SELECT user_id2 FROM friendship WHERE user_id1='$id' ORDER BY date_created DESC")->result_array();
        $result = [];
        for($i = 0; $i < count($query); $i++){
            array_push($result, $query[$i]['user_id2']);
        }   
        return $result;
    }


    public function insert_to_friend_request($requester_id, $receiver_id)
    {   
        if($this->is_friend($requester_id, $receiver_id)){return;}
        $this->db->query("INSERT INTO friend_request (requester_id, receiver_id ) VALUES ('$requester_id', '$receiver_id')");
    }

    public function delete_from_friend_request($id){

    }

    public function search_friend($keyword){
        // return $this->db->query("SELECT username FROM users WHERE username='$username'")->result_array();
        return $this->db->query("SELECT * FROM users WHERE username LIKE '%$keyword%'")->result();
    }

    public function is_friend($id1, $id2)
    {
        $query = $this->db->query("SELECT * FROM friendship WHERE user_id1='$id1' AND user_id2='$id2'")->result();
        if (count($query) < 1){
            return false;
        }else{
            return true;
        }
    }


    public function is_added($sess_id, $profile_id)
    {
        $query = $this->db->query("SELECT * FROM friend_request WHERE requester_id='$sess_id' AND receiver_id='$profile_id'")->result();
        if (count($query) < 1){
            return false;
        }else{
            return true;
        }
    }

}
