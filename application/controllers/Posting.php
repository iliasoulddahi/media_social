<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_posting');
        $this->load->model('model_user');
        $this->load->model('model_friend');
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
            'user_id' => $this->session->userdata('user_id'),
            'post_content' => $posting,
        ];
        $this->model_posting->insert_to_post($insert_to_post);
        $this->session->set_flashdata('message', 'Posting Berhasil');
        redirect('home');
    }

    public function time_line()
    {
        $sess_id = $this->session->userdata('user_id');
        $friends = $this->model_friend->get_all_friends($sess_id);
        $friend_post = $this->model_posting->get_friend_post($friends);
        $self_post = $this->model_posting->get_all_post($sess_id);

        $postingan = [];
        for ($i = 0; $i < count($friend_post); $i++) {
            for ($j = 0; $j < count($friend_post[$i]); $j++) {
                array_push($postingan, $friend_post[$i][$j]);
            }
        }
        for ($i = 0; $i < count($self_post); $i++) {
            array_push($postingan, $self_post[$i]);
        }

        usort($postingan, function ($firstItem, $secondItem) {
            $timeStamp1 = strtotime($firstItem['date_created']);
            $timeStamp2 = strtotime($secondItem['date_created']);
            return $timeStamp2 - $timeStamp1;
        });

        $output = '';

        if (count($postingan) < 1) {
            $profile_image = base_url('assets/img/admin_profile_image.png');

            $output .= <<<EOD
            <div class="w-full bg-gray-200 rounded-2xl mt-3 pb-3 relative">
            <div class="flex justify-between w-full">
                <a href="#"><div class="flex items-center border-b border-solid border-gray-400 pb-3">
                    <img src="$profile_image" alt="" class="w-16 h-16 bg-white rounded-tl-xl">
                    <div class="text-xl self-end font-semibold">MedsosKel4 Admin</div>
                </div></a>
                <div class="font-light mt-4 mr-3">whenever :D</div>
            </div>

            <div class="mt-2 ml-3 text-xl">
                selamat anda telah berhasil mendaftar di medsoskel4 , saat nya mencari teman baru. 
            </div>

            <div class="flex w-full min-w-max justify-evenly mt-5">
                <button href="#" class="w-14 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-xl">
                        thumb_up
                    </span></button>
                <button id="btn-comment" class="w-14 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center" id="btn-comment"><span class="material-icons text-blue-300 hover:text-blue-700 text-xl">
                        insert_comment
                    </span></button>
            </div>
            <!-- form insert comment -->
            <form action="<?= base_url('') ?>" method="post" id="form-comment" class="w-full px-3 hidden">
                <div class="flex">
                    <textarea name="comment" id="comment" rows="2" placeholder="berikan komentar" class="w-full hide-scrollbar p-2 mt-3"></textarea>
                    <button type="submit">
                        <span class="material-icons text-4xl absolute right-6 bottom-6">
                            send
                        </span>
                    </button>
                </div>
            </form>
        </div>
      EOD;

        }
        for ($i = 0; $i < count($postingan); $i++) {
            $users = $this->model_user->get_all_from_id($postingan[$i]['user_id']);
            $username = $users['username'];
            $profile_image = base_url('assets/img/') . $users['profile_image'];
            $content = $postingan[$i]['post_content'];
            $date_created = $postingan[$i]['date_created'];

            $output .= <<<EOD
            <div class="w-full bg-gray-200 rounded-2xl mt-3 pb-3 relative">
            <div class="flex justify-between w-full">
                <a href="#"><div class="flex items-center border-b border-solid border-gray-400 pb-3">
                    <img src="$profile_image" alt="" class="w-16 h-16 bg-white rounded-tl-xl">
                    <div class="text-xl self-end font-semibold">$username</div>
                </div></a>
                <div class="font-light mt-4 mr-3">$date_created</div>
            </div>

            <div class="mt-2 ml-3 text-xl">
                $content
            </div>

            <div class="flex w-full min-w-max justify-evenly mt-5">
                <button href="#" class="w-14 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-xl">
                        thumb_up
                    </span></button>
                <button id="btn-comment" class="w-14 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center" id="btn-comment"><span class="material-icons text-blue-300 hover:text-blue-700 text-xl">
                        insert_comment
                    </span></button>
            </div>
            <!-- form insert comment -->
            <form action="<?= base_url('') ?>" method="post" id="form-comment" class="w-full px-3 hidden">
                <div class="flex">
                    <textarea name="comment" id="comment" rows="2" placeholder="berikan komentar" class="w-full hide-scrollbar p-2 mt-3"></textarea>
                    <button type="submit">
                        <span class="material-icons text-4xl absolute right-6 bottom-6">
                            send
                        </span>
                    </button>
                </div>
            </form>
        </div>
      EOD;
        }

        // var_dump($postingan);
        // var_dump($friend_post);
        echo $output;
    }
}
