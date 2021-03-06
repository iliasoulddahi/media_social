<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('model_user');
        $this->load->model('model_posting');
        $this->load->model('model_friend');
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
    }


    public function index()
    {
        $data_from_session_id = $this->model_user->get_all_from_id($this->session->userdata('user_id'));

        $data = [
            'title' => $data_from_session_id['username'],
            'name' => $data_from_session_id['username'],
            'profile_image' => $data_from_session_id['profile_image'],
        ];
        $this->load->view("layout_top", $data);
        $this->load->view("layout_view_navbar");
        $this->load->view('view_home');
        $this->load->view('layout_view_footer');
        $this->load->view('layout_bottom');
    }
}
