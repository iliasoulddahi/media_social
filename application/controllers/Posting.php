<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_posting');
        $this->load->model('model_user');
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        echo 'posting';
    }

    public function add()
    {
        $posting = '<p>' . $this->input->post('user_post') . '<p>';
        $insert_to_post = [
            'id' => $this->session->userdata('user_id'),
            'content' => $posting,
            'date' => time()
        ];
        $this->model_posting->insert_to_post($insert_to_post);
        $this->session->set_flashdata('message', 'Posting Berhasil');
        redirect('home');
    }

    public function time_line()
    {
        
    }
}
