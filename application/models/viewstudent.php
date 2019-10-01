<?php

class viewstudent extends CI_Model
{

    function displayrecords()
    {
        $this->db->select("*");
        $this->db->from("add_student");
        $this->db->where('del_flag', 0);
        $query = $this->db->get();
        return $query->result();
    }
}
