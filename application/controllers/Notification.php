<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notification extends CI_Controller
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
        // check apakah user memilik notif
        $notification = [];
        $user_id = $this->session->userdata('user_id');
        // if (count($this->model_friend->get_requester_id($user_id)) > 0){

        // }
        $friend_request = $this->model_friend->get_requester_id($user_id);

        foreach ($friend_request as $value) {
            $notification[] = $value['requester_id'];
        }

        //output
        $base_url_img = base_url('assets/img/');
        $accept_friend_url = base_url('friend/accept_friend');
        $output = "";
        for ($i=0; $i < count($notification); $i++) {
            $requester =  $this->model_user->get_all_from_id_2($notification[$i]);
            $output .= <<<EOD
        <form action="$accept_friend_url" method="GET" class="flex justify-between items-center bg-blue-900 w-full h-10 border-b-2 border-black p-1 mb-2">
        <img src="$base_url_img$requester->profile_image" class="w-8 h-8">
        <div>$requester->username</div>
        <button class="bg-green-300" name="requester" value="$requester->user_id" id="btn-addfriend">terima</button>
        </form>
        EOD;
        }

        echo $output;
    }
}
