<?php include ('admin_header.php');

?>

<?php echo form_open('student/updatestudent') ?>
<form>
    <?php
    foreach ($data as $row)
    {?>
         <div class="panel panel-primary" >
        <div class="panel-heading" >
            <p class="label" style="font-size: 15px">Student Update Form</p>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="hidden" name="id" value="<?php echo $row->id ?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name" name="fname" value="<?php echo $row->firstname; ?>">
                    <div class="row-lg-6">
                        <?php echo form_error('fname'); ?>
    </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Last Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Last Name" name="lname" value="<?php echo $row->lastname; ?>">
        <div class="row-lg-6">
            <?php echo form_error('lname'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Address</label>
        <textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Enter Address" name="add"><?php echo $row->address ?></textarea>
        <div class="row-lg-6">
            <?php echo form_error('add'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contact Number</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Contact Number" name="cno" value="<?php echo $row->phone ?>">
        <div class="row-lg-6">
            <?php echo form_error('cno'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Emaid ID</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your email" name="email" value="<?php echo $row->email ?>">
        <div class="row-lg-6">
            <?php echo form_error('email'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Course</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Course Name" name="cname" value="<?php echo $row->course ?>">
        <div class="row-lg-6">
            <?php echo form_error('cname'); ?>
        </div>
    </div>

    <h4 align="center" style="margin-left: -150px"><button type="submit" class="btn btn-primary">Update</button></h4>
    <h4 align="center" style="margin-top: -43px;margin-left: 200px"><button type="reset" class="btn btn-primary">Reset</button></h4>
    </fieldset>
    </div>
    </div>
   <?php }
    ?>

</form>
