<!-- model user -->
<?php

class Model_user extends CI_Model{

    // registrasi baru member
    public function registration($parameter)
    {
        $this->db->insert('users',$parameter);
    }


}