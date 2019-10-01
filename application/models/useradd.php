<?php

class useradd extends CI_Model
{

    function addstudent($data)
    {
          $result = $this->db->insert('add_student', $data);
          return $result;
    }
}
