<?php

class showstudent extends CI_Model
{

    function displayrecords($user_id)
    {
        $this->db->where('id', $user_id);

        $query = $this->db->get('add_student');
        return $query->result();
    }
}
