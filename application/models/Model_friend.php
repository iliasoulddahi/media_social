<?php

class Model_friend extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
    }
    public function update_to_friend_list( $id, $arr)
    {
        $data = implode(',',$arr);
        
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

    public function insert_to_friend_request($id_requester, $id_receiver){
        $time = time();
        return $this->db->query("INSERT INTO friend_request (id_requester, id_receiver, date_created) VALUES ('$id_requester', '$id_receiver', '$time')");
    }
}