<!DOCTYPE html>
<html><head><title></title>
</head><body>
	<table border="1"><tr>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Course</th>
		
	</tr>
<?php foreach ($rowMarks as $row) {
	?>
	<tr>
		<td><?php echo $row->firstname; ?></td>
		<td><?php echo $row->lastname; ?></td>
		<td><?php echo $row->address; ?></td>
		<td><?php echo $row->phone; ?></td>
		<td><?php echo $row->email; ?></td>
		<td><?php echo $row->course; ?></td>

	</tr>
	<?php
} ?>
</table></body></html>