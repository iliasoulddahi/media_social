<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kel4testing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_posting');
        $this->load->model('model_friend');
        $this->load->model('model_user');

    }

    public function index()
    {
        // var_dump($this->model_posting->get_all_post('1'));
        // var_dump($this->model_friend->get_all_friends('1'));
        // $this->model_friend->update_to_friends_list(1, "10");
        // print_r($this->db->query("SELECT * FROM post ORDER BY date DESC")->result_array()); 
        // $this->model_friend->insert_to_friend_request('63', '32');
        // var_dump($this->model_friend->get_all_friend_request());
        // var_dump($this->model_user->get_all_from_id_2('1'));
        // var_dump($this->model_friend->search_friend('1'));
        // var_dump( $this->model_friend->get_requester_id('1'));
        // $this->model_friend->delete_friend_request('20','100');
        // var_dump($this->model_friend->is_friend('10', '1'));
        var_dump($this->model_friend->get_all_friends('2'));
        // var_dump($this->model_posting->get_friend_post(['3']));
        
    }
}
