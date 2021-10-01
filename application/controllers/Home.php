<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() 
    {   
        $data['title'] = 'home page';
        $this->load->view("layout_top", $data);
        $this->load->view("layout_view_navbar");
		$this->load->view('view_home');
		$this->load->view('layout_bottom');
	}
}
