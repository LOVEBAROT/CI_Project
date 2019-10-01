<?php
class Loginmodel extends CI_Model{
    public function login_valid($email,$pass){
        $q=$this->db->where(['email'=>$email,'password'=>$pass])->get('registration');
        if($q->num_rows()){
            return $q->row()->id;

        }else{
            return FALSE;
        }
    }
}
?>

