<?php

class Login_model extends CI_Model {


    public function checkCredentials($username,$password)
    {

        $sql = "SELECT * FROM user WHERE username='".$username."' AND password =md5('".$password."')";
        $this->db->query($sql);
        
        return $this->db->affected_rows();

    }

}