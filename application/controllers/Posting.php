<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_posting');
    }

	public function index() 
    {   
        echo 'posting';
	}

    public function add(){

        
        if(!$this->session->userdata('user_id')){return;}

        $posting = '<p>'.$this->input->post('posting').'<p>';
        $data = [
            'id' => $this->session->userdata('user_id'),
            'content' => $posting,
            'date' => time()
        ];
        $this->model_posting->add($data);
    }
}
