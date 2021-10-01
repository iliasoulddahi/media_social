<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kel4testing extends CI_Controller {

	public function index() 
    {   
        var_dump($this->model_user->get_all());
	}
}
