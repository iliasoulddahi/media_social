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
        $base_url_profile = base_url('profile?p=');
        $output = "";
        for ($i = 0; $i < count($notification); $i++) {
            $requester =  $this->model_user->get_all_from_id_2($notification[$i]);
            $output .= <<<EOD
        <div id="accept-friend-$requester->user_id" class="flex justify-between items-center bg-gray-500 w-full p-1 mb-2">
        <a href="$base_url_profile$requester->user_id"><img src="$base_url_img$requester->profile_image" class="h-14"></a>
        <div class="font-bold text-gray-900 w-52">$requester->username <span class="font-light">mengundang anda untuk berteman apa anda menerima nya apa adanya? ...</span></div> 
        <div class="flex flex-col self-center h-16  justify-between">
        <button class="bg-red-600 w-14 rounded-lg">tolak</button>
        <button onClick="accept_friend($requester->user_id)" class="bg-green-300 w-14 rounded-lg">terima</button>
        </div>
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
        $base_url_profile = base_url('profile?p=');
        $search = $this->input->get('keyword');
        $search_friend_result = $this->model_friend->search_friend($search);
        if ($search == "") {
            return;
        }
        $output = '';
        foreach ($search_friend_result as $i) {
            if ($this->model_friend->is_friend($i->user_id, $userid_session)) {
                $output .= <<<EOD
        <div id="add-friend-$i->user_id" class="flex justify-between items-center bg-gray-500 w-full p-1 mb-2">
            <a class="flex" href="$base_url_profile$i->user_id"><img src="$base_url_img$i->profile_image" class="w-14">
            <div class="font-semibold ml-1">$i->username <br> <span class="font-light">jakarta barat</span></div></a>
            <div class="bg-green-100 self-end">sudah berteman dengan anda</div>
        </div>
      EOD;
                continue;
            }

            if ($i->user_id == $userid_session) {
                continue;
            }

            $output .= <<<EOD
        <div id="add-friend-$i->user_id" class="flex justify-between items-center bg-gray-500 w-full p-1 mb-2">
            <a class="flex" href="$base_url_profile$i->user_id"><img src="$base_url_img$i->profile_image" class="w-14">
            <div class="font-semibold ml-1">$i->username <br> <span class="font-light">jakarta barat</span></div></a>
            
            <button onClick="add_friend($i->user_id)" class="bg-blue-600 mr-3" name="receiver"><span class="material-icons text-4xl">
            person_add_alt
            </span></button>
        </div>
      EOD;
        }
        echo $output;
    }

}
