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
        redirect('home');
    }

    public function add_friend()
    {
        $requester = $this->session->userdata('user_id');
        $receiver = $this->input->post('receiver_id');
        $this->model_friend->insert_to_friend_request($requester, $receiver);
        
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function accept_friend()
    {
        // masukan teman ke requester
        $requester_id = $this->input->post('requester_id');
        $receiver_id = $this->session->userdata('user_id');
        $this->model_friend->delete_friend_request($requester_id, $receiver_id);
        $this->model_friend->insert_to_friendship($requester_id, $receiver_id);
    }

    public function friends_list()
    {
        $sess_id = $this->session->userdata('user_id');
        $friends = $this->model_friend->get_all_friends($sess_id);

        $output = '';
        if(count($friends) < 1){
            $output .= <<<EOD
         
            <div class="capitalize transform rotate-90 text-gray-100 text-4xl whitespace-nowrap mt-14">Anda Belum Memiliki Teman</div>

            EOD;
        }
        for ($i = 0; $i < count($friends); $i++) {
            $user_data = $this->model_user->get_all_from_id($friends[$i]);
            $username = $user_data['username'];
            $profile_image = base_url('assets/img/').$user_data['profile_image'];
            $profile_link = base_url().'profile?p='.$user_data['user_id'];
            $output .= <<<EOD
            <a href="$profile_link">
            <div class="relative">
                        <img src="$profile_image" alt="" class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16">
                        <h1 class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 font-semibold">$username</h1>
                    </div></a>
            EOD;
        }

        echo $output;
    }
}
