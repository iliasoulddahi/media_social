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
        $receiver = $this->input->post('receiver');
        $this->model_friend->insert_to_friend_request($requester, $receiver);
    }

    public function accept_friend()
    {
        
    }
}
