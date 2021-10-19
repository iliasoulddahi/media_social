<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_posting');
		$this->load->model('model_friend');
		if (!$this->input->get('p')){
			redirect('home');
		}
	}

	public function index()
	{
		$sess_id = $this->session->userdata('user_id');
		$profile_id = $this->input->get('p');
		$is_admin = true;
		if($sess_id != $profile_id){
			$is_admin = false;
			$data_sess = $this->model_user->get_all_from_id($sess_id);
			$data_profile = $this->model_user->get_all_from_id($profile_id);
			$postingan = $this->model_posting->get_all_post($profile_id);
			$data = [
			'title'=>'Profil'.$data_profile['username'],
			'name' => $data_sess['username'],
			'profile_name' => $data_profile['username'],
            'profile_image' => $data_sess['profile_image'],
            'profile_profile_image' => $data_profile['profile_image'],
			'posts' => $postingan,

			'is_admin'=> $is_admin,
			'is_friend'=> $this->model_friend->is_friend($data_sess['user_id'], $data_profile['user_id'])
		];
		}else{
			$data_profile = $this->model_user->get_all_from_id($sess_id);
			$postingan = $this->model_posting->get_all_post($sess_id);
			$data = [
				'title'=>'Profil'.$data_profile['username'],
				'name' => $data_profile['username'],
				'profile_name' => $data_profile['username'],
				'profile_image' => $data_profile['profile_image'],
				'profile_profile_image' => $data_profile['profile_image'],
				'posts' => $postingan,

				'is_admin'=> $is_admin
			];
		}
		
		
		$this->load->view('layout_top', $data);
		$this->load->view('layout_view_navbar');
		$this->load->view('view_profile');
		$this->load->view('layout_view_footer');
		$this->load->view('layout_bottom');
	}
}
