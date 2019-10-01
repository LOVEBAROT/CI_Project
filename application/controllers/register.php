<?php

class Register extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

    }
    public function index()
    {
        $this->form_validation->set_rules('fname','FirstName','required|alpha');
        $this->form_validation->set_rules('lname','LastName','required');
        $this->form_validation->set_rules('pass','Password','required');
        $this->form_validation->set_rules('repass','Confirm Password','required|matches[pass]');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('phno','Phone Number','required|numeric|exact_length[10]');
        $this->form_validation->set_rules('sque','Sequrity Questions','required');
        $this->form_validation->set_rules('sans','Sequrity Answer','required');
        $this->form_validation->set_error_delimiters("<p class='text-primary'>","</p>");
        if($this->form_validation->run()== TRUE){

            $data = array(
                'firstname' => $this->input->post('fname'),
                'lastname' => $this->input->post('lname'),
                'gender' => $this->input->post('pass'),
                'password'=> $this->input->post('repass'),
                'repassword	' => $this->input->post('gender'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phno'),
                'sque' => $this->input->post('sque'),
                'sans' => $this->input->post('sans')
            );

            $result =  $this->db->insert('registration', $data);
            if($result==true)
            {
                $this->session->set_flashdata('success', 'Record Successfully Inserted');
                return redirect('register/index');
            }
        }else{
            $this->load->view('register');
        }
    }
    public function login(){

        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('pass','Password','required');
        $this->form_validation->set_error_delimiters("<p class='text-primary'>","</p>");
        if($this->form_validation->run()== TRUE){
            $email=$this->input->post('email');
            $pass=$this->input->post('pass');
            $this->load->model('loginmodel');
            $login_id=$this->loginmodel->login_valid($email,$pass);

            if($login_id){
                $this->session->set_userdata('user_id',$login_id);
                $this->session->set_userdata('email',$email);
                $this->session->set_userdata('pass',$pass);
                //$this->session->set_flashdata('login_success','username and pasword are match...');
                return redirect('admin');
            }else{
                $this->session->set_flashdata('login_failed','username and pasword not match...!');
                return redirect('register/login');
            }

        }else{
            $this->load->view('login');
        }
    }
    public function logout(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('pass');
        $this->session->sess_destroy();
        redirect('register/login');
    }

    public function home(){
        $this->load->view('home');
    }
    public function forgot_pass(){

        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_error_delimiters("<p class='text-primary'>","</p>");
        if($this->form_validation->run()== TRUE){
                    //write your code here
        }else{
            $this->load->view('forgot_pass');
        }
    }
}

