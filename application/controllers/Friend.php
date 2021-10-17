<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Friend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('model_friend');
        $this->load->model('model_user');
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $this->load->view('view_profile');
    }

    public function add_friend()
    {
        $requester = $this->session->userdata('user_id');
        $receiver = $this->input->post('receiver_id');
        $this->model_friend->insert_to_friend_request($requester, $receiver);
        redirect("home");
    }

    public function accept_friend()
    {
        // masukan teman ke requester
        $requester_id = $this->input->post('requester_id');
        $receiver_id =$this->session->userdata('user_id');
        $this->model_friend->delete_friend_request($requester_id,$receiver_id);
        $this->model_friend->insert_to_friendship($requester_id, $receiver_id);
    }
}
