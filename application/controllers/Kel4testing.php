<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kel4testing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_posting');
        $this->load->model('model_friend');
    }

    public function index()
    {
        // var_dump($this->model_posting->get_all_post('1'));
        // var_dump($this->model_friend->get_all_friend('1'));
        // $this->model_friend->update_to_friend_list(1, [7,6,5,4,3,2,1]);
        // print_r($this->db->query("SELECT * FROM post ORDER BY date DESC")->result_array()); 
        $this->model_friend->insert_to_friend_request('63', '32');
        
    }
}
