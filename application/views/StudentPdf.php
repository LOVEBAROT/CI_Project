<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>
<?php 
 $output = '<table width="100%" cellspacing="5" cellpadding="5" border="1">
 ';
  foreach($result as $row)
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
   <td colspan="2" align="center"><a href="'.base_url().'index.php/student/showstudent" class="btn btn-primary" style="color:black;font-weight:bold">Click Here For Back</a></td>
  </tr>	
  ';
  $output .= '</table>';
  echo $output;
 
?>
</body>	
</html>

