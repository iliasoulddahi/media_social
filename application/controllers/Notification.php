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
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
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
        $output = "";
        for ($i = 0; $i < count($notification); $i++) {
            $requester =  $this->model_user->get_all_from_id_2($notification[$i]);
            $output .= <<<EOD
        <div id="accept-friend-$requester->user_id" class="flex justify-between items-center bg-blue-900 w-full h-10 border-b-2 border-black p-1 mb-2">
        <a href="#"><img src="$base_url_img$requester->profile_image" class="w-8 h-8"></a>
        <div>$requester->username</div>
        <button onClick="accept_friend($requester->user_id)" class="bg-green-300">terima</button>
        </div>
        EOD;
        }

        echo $output;
    }

    // mencari teman dari search bar yang di navbar
    public function search_friend()
    {
        $userid_session = $this->session->userdata('user_id');

        $base_url_img = base_url('assets/img/');
        $search = $this->input->get('keyword');
        $search_friend_result = $this->model_friend->search_friend($search);
        if ($search == "") {
            return;
        }
        $output = '';
        foreach ($search_friend_result as $i) {
            if ($this->model_friend->is_friend($i->user_id, $userid_session)) {
                $output .= <<<EOD
        <div id="add-friend-$i->user_id" class="flex justify-between items-center bg-blue-900 w-full h-10 border-b-2 border-black p-1 mb-2">
            <img src="$base_url_img$i->profile_image" class="w-8 h-8">
            <div>$i->username</div>
        </div>
      EOD;
                continue;
            }

            if($i->user_id == $userid_session){
                continue;
            }

            $output .= <<<EOD
        <div id="add-friend-$i->user_id" class="flex justify-between items-center bg-blue-900 w-full h-10 border-b-2 border-black p-1 mb-2">
            <img src="$base_url_img$i->profile_image" class="w-8 h-8">
            <div>$i->username</div>
            <button onClick="add_friend($i->user_id)" class="bg-green-300" name="receiver"><span class="material-icons">
            person_add_alt
            </span></button>
        </div>
      EOD;
        }
        echo $output;
    }
    // public function search_friend()
    // {
    //     $base_url_img = base_url('assets/img/');
    //     $add_friend_url = base_url('friend/add_friend');
    //     $search = $this->input->get('keyword');
    //     $search_friend_result = $this->model_friend->search_friend($search);
    //     if ($search == "") {
    //         return;
    //     }
    //     $output = '';
    //     foreach ($search_friend_result as $i) {
    //         $output .= <<<EOD
    //     <form action="$add_friend_url" method="GET" class="flex justify-between items-center bg-blue-900 w-full h-10 border-b-2 border-black p-1 mb-2">
    //         <img src="$base_url_img$i->profile_image" class="w-8 h-8">
    //         <div>$i->username</div>
    //         <button class="bg-green-300" name="receiver" value="$i->user_id" id="btn-addfriend"><span class="material-icons">
    //         person_add_alt
    //         </span></button>
    //     </form>
    //   EOD;
    //     }
    //     echo $output;
    // }
}
