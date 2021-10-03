<?php

class Model_posting extends CI_Model{

    public function add($n){
        $this->db->insert("post", $n);
    }

}