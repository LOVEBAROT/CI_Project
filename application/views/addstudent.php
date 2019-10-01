<?php include ('admin_header.php'); ?>
<?php echo form_open_multipart('student/insertstudent') ?>
<form>
    <div class="panel panel-primary" >
        <div class="panel-heading" >
            <p class="label" style="font-size: 15px">Student Registration Form</p>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name" name="firstname" value="<?php echo set_value('firstname'); ?>">
                    <div class="row-lg-6">
                        <?php echo form_error('firstname'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Last Name" name="lastname" value="<?php echo set_value('lastname'); ?>">
                    <div class="row-lg-6">
                        <?php echo form_error('lastname'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Address</label>
                    <textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Enter Address" name="address"><?php echo set_value('address'); ?></textarea>
                    <div class="row-lg-6">
                        <?php echo form_error('address'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contact Number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Contact Number" name="phone" value="<?php echo set_value('phone'); ?>">
                    <div class="row-lg-6">
                        <?php echo form_error('phone'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Emaid ID</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your email" name="email" value="<?php echo set_value('email'); ?>">
                    <div class="row-lg-6">
                        <?php echo form_error('email'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Enter Course</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Course Name" name="course" value="<?php echo set_value('course'); ?>">
                    <div class="row-lg-6">
                        <?php echo form_error('course'); ?>
                    </div>
                </div>
             <!--   <div class="form-group">
                    <label for="exampleInputPassword1">Select Student Photo</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Enter Course Name" name="photo">
                    <div class="row-lg-6">
                        <?php echo form_error('photo'); ?>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Select Student Photo</label>
                    <?php echo form_upload(['name' => 'userfile','class'=>'form-control']); ?>
                     <div class="row-lg-6">
                        <?php if(isset($upload_error))
                        {
                            echo $upload_error;
                        } ?>
                    </div>
                </div>


                <h4 align="center" style="margin-left: -150px"><button type="submit" class="btn btn-primary">Register</button></h4>
                <h4 align="center" style="margin-top: -43px;margin-left: 200px"><button type="reset" class="btn btn-primary">Reset</button></h4>
            </fieldset>
        </div>
    </div>
</form>
