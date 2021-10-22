<?php

class Model_posting extends CI_Model
{
    /**
     * Descripsi    : 
     * Input        : 
     * Return       : 
     */
    public function insert_to_post($n)
    {
        return $this->db->insert("post", $n);
    }

    /**
     * Descripsi    : 
     * Input        : 
     * Return       : 
     */
    public function get_all_post($id)
    {
        return $this->db->query("SELECT * FROM post WHERE user_id=$id ORDER BY date_created DESC")->result_array();
    }

    /**
     * Descripsi    : 
     * Input        : 
     * Return       : 
     */
    public function get_friend_post($arr){
        $result = [];

        for ($i=0; $i < count($arr); $i++){
            $n = $arr[$i];
            $query = $this->db->query("SELECT user_id,post_content,date_created FROM post WHERE user_id='$n' ORDER BY date_created DESC")->result_array();
            $result[] = $query;
        }

        return $result;
    }
}
