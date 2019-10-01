<?php
class student extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            return redirect('register/login');

        }
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    }
    public function addstudent(){
        $this->load->view('addstudent');

    }
    public function insertstudent()
    {
        $this->form_validation->set_rules('firstname', 'FirstName', 'required|alpha');
        $this->form_validation->set_rules('lastname', 'lastName', 'required|alpha');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Contact Number', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('course', 'Course Name', 'required');
        $this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");
        $config['upload_path'] = './asset/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->upload->initialize($config);
        $this->load->library('upload',$config); 

            if ($this->form_validation->run() == TRUE && $this->upload->do_upload('userfile')) {
                $post = $this->input->post();
                $data = $this->upload->data();  
               
                $image_path = $data['raw_name'].$data['file_ext'];
                $post['photo'] = $image_path;
                $this->load->model('useradd');
                if($this->useradd->addstudent($post)==TRUE){

                     $this->session->set_flashdata('success', 'Record Successfully Inserted');
                     return redirect('admin');
                  }else{
                     $this->load->view('addstudent');
                 }


            } else {
                $upload_error = $this->upload->display_errors();
                $this->load->view('addstudent',compact('upload_error'));
            }

        }

    public function showstudent(){
        $this->load->model('viewstudent');
        $result['data']=$this->viewstudent->displayrecords();
        $this->load->view('show_student',$result);
    }
    public function removestudent($user_id){
        $result=$this->db->set('del_flag', '1', FALSE);
        $this->db->where('id', $user_id);
        $this->db->update('add_student');
        if($result==true){
            $this->session->set_flashdata('delsuccess', 'Record Successfully Deleted');
            return redirect('admin');
        }else{
            $this->load->view('admin');
        }
    }
    public function editstudent($user_id){
        $this->load->model('showstudent');
        $result['data']=$this->showstudent->displayrecords($user_id);
        $this->load->view('updatestudent',$result);
    }
    public function updatestudent(){
        $id=$this->input->post('id');
        $data = array(
            'firstname' => $this->input->post('fname'),
            'lastname' => $this->input->post('lname'),
            'address' => $this->input->post('add'),
            'phone'=> $this->input->post('cno'),
            'email' => $this->input->post('email'),
            'course' => $this->input->post('cname')
        );
                $this->db->where('id',$id);
                $result= $this->db->update('add_student',$data);
                if($result==true){
                    $this->session->set_flashdata('upsuccess', 'Record Successfully updated');
                    return redirect('admin');
                }else{
                    $this->load->view('admin');
                }
    }
    public function studentprofile($user_id){
           
            $this->load->model('showstudent');
            $result['data']=$this->showstudent->displayrecords($user_id);
            $this->load->view('student_profile',$result);
    }
    
}
