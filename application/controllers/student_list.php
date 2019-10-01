<?php
class student_list extends CI_Controller {
    public function index(){
        $this->load->model('viewstudent');
        $result['data']=$this->viewstudent->displayrecords();
        $this->load->view('student_list',$result);
    }
}