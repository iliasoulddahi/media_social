<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() 
    {   $data_from_session_email = $this->model_user->get_all_from_id($this->session->userdata('user_id'));
        $data = [
            'title'=> $data_from_session_email['name'],
            'name'=> $data_from_session_email['name'],
            'profil_image'=> $data_from_session_email['profil_image'],
        ];
        $this->load->view("layout_top", $data);
        $this->load->view("layout_view_navbar");
		$this->load->view('view_home');
		$this->load->view('layout_bottom');
	}
}
