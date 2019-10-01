<?php

class Htmltopdf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('htmltopdf_model');
        $this->load->library('pdf');
    }

    public function index() {

        $this->load->library('pdf');
        $html_content = '<h3 align="center">Students Details</h3>';
        $html_content .= $this->htmltopdf_model->getstudents();
        $this->pdf->loadHtml($html_content);
        $this->pdf->render();
        $this->pdf->stream("StudentDetails", array("Attachment"=>0));
        
    }
    public function StudentPdf($student_id)
    {
        $this->load->library('pdf');
        $html_content = '<h3 align="center">Student Details</h3>';
        $html_content .= $this->htmltopdf_model->StudentPdf($student_id);
        $this->pdf->loadHtml($html_content);
        $this->pdf->render();
        $this->pdf->stream("".$student_id.".pdf", array("Attachment"=>0));
    }
}
