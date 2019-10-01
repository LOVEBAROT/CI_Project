<?php 

class Htmltopdf_model extends CI_Model{

	 function getstudents(){
	 	
		 $this->db->select("*");
        $this->db->from("add_student");
        $this->db->where('del_flag', 0);
        $query = $this->db->get();
       	
       	$output = '<table width="100%" cellspacing="5" cellpadding="5" border="1">';
		foreach($query->result() as $row)
		{
			$output .= '
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Course</th>
			</tr>
			<tr>
				<td>'.$row->firstname.'</td>
				<td>'.$row->lastname.'</td>
				<td>'.$row->address.'</td>
				<td>'.$row->phone.'</td>
				<td>'.$row->email.'</td>
				<td>'.$row->course.'</td>
			</tr>
			';
		}
		$output .= '
		<tr>
			<td colspan="6" align="center"><a href="'.base_url().'index.php/student/showstudent" class="btn btn-primary">Back</a></td>
		</tr>
		';
		$output .= '</table>';
		return $output;
		
	 }
	 function StudentPdf($student_id){
	 	 $this->db->where('id', $student_id);
		 $query = $this->db->get('add_student');

		$output = '<table width="100%" cellspacing="5" cellpadding="5" border="1">';
		foreach($query->result() as $row)
		{
			$output .= '
			<tr>
				<td width="25%"><img src="'.base_url().'asset/uploads/'.$row->photo.'" /></td>
				<td width="75%">
					 <p><b>Firstname : </b>'.$row->firstname.'</p>
				     <p><b>lastname : </b>'.$row->lastname.'</p>
				     <p><b>Address : </b>'.$row->address.'</p>
				     <p><b>Phone : </b>'.$row->phone.'</p>
				     <p><b>Email : </b> '.$row->email.' </p>
				     <p><b>Course : </b> '.$row->course.' </p>
				</td>
			</tr>
			';
		}
		$output .= '
		<tr>
			<td colspan="2" align="center"><a href="'.base_url().'index.php/student/showstudent" class="btn btn-primary">Back</a></td>
		</tr>
		';
		$output .= '</table>';
		return $output;
       
	 }
}