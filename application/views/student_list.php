<?php include ('header.php'); ?>


<div class="container">

    <h2>Student List</h2>
    <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Course</th>
        </tr>
        </thead>
        <?php foreach($data as $row){
            ?>
            <tbody>
            <tr>
                <td><?php echo $row->id?></td>
                <td><?php echo $row->firstname?></td>
                <td><?php echo $row->lastname?></td>
                <td><?php echo $row->address?></td>
                <td><?php echo $row->phone?></td>
                <td><?php echo $row->email?></td>
                <td><?php echo $row->course?></td>
            </tr>

            </tbody>
            <?php
        }?>
    </table>







</div>
<!-- /.container -->