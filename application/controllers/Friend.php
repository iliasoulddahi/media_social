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

    public function search_friend()
    {
        $base_url_img = base_url('assets/img/');
        $search = $this->input->get('keyword');
        $search_friend_result = $this->model_friend->search_friend($search);
        if ($search == "") {
            return;
        }
        $output = '';
        foreach ($search_friend_result as $i) {
        $output .= <<<EOD
        <form action="<?= base_url('friend/add_friend') ?>" method="POST" class="flex justify-between items-center bg-blue-900 w-full h-10 border-b-2 border-black p-1 mb-2">
            <img src="$base_url_img$i->profile_image" class="w-8 h-8">
            <div>$i->username</div>
            <button class="bg-green-300" name="receiver" value="$i->user_id" type="submit"><span class="material-icons">
            person_add_alt
            </span></button>
        </form>
      EOD;
        }
        echo $output;
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
