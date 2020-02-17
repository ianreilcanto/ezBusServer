<?php 

class Admin_model extends CI_Model{

    
    public function getSchedules(){

        $sql = "SELECT * FROM trip ORDER BY Bus_id";
        $query = $this->db->query($sql);
        
        return $query->result();

    }
}