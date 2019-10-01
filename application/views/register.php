<?php include ('header.php');?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/registration.css') ?>">
<?php echo form_open('register/index') ?>

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>

            <a href="<?php echo base_url("index.php/register/login") ?>" style="background-color: white;color: black;width: 150px;border-radius: 40px;font-weight: bold;margin-top: 100px" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-user"></span> Login</a>
        </div>
        <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Registration Form</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" name="fname" value="<?php echo set_value('fname'); ?>" />
                                <div class="row-lg-6">
                                    <?php echo form_error('fname'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" name="lname" value="<?php echo set_value('lname'); ?>" />
                                <div class="row-lg-6">
                                    <?php echo form_error('lname'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" name="pass" value="<?php echo set_value('pass'); ?>" />
                                <div class="row-lg-6">
                                    <?php echo form_error('pass'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Confirm Password *" name="repass" value="<?php echo set_value('repass'); ?>" />
                                <div class="row-lg-6">
                                    <?php echo form_error('repass'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="male"  <?php echo set_radio('gender', 'male'); ?>>
                                        <span> Male </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>>
                                        <span>Female </span>
                                    </label>
                                </div>
                                <div class="row-lg-6">
                                    <?php echo form_error('gender'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" value="<?php echo set_value('email'); ?>" name="email" />
                                <div class="row-lg-6">
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="phno" class="form-control" placeholder="Your Phone *" value="<?php echo set_value('phno'); ?>" />
                                <div class="row-lg-6">
                                    <?php echo form_error('phno'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="sque">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option value="What is your Birthdate?" <?php echo set_select('sque','What is your Birthdate?', ( !empty($data) && $data == "input" ? TRUE : FALSE )); ?>>What is your Birthdate?</option>
                                    <option  value="What is Your old Phone Number" <?php echo set_select('sque','What is Your old Phone Number', ( !empty($data) && $data == "input" ? TRUE : FALSE )); ?>>What is Your old Phone Number</option>
                                    <option  value="What is your Pet Name?" <?php echo set_select('sque','What is your Pet Name?', ( !empty($data) && $data == "input" ? TRUE : FALSE )); ?>>What is your Pet Name?</option>
                                </select>
                                <div class="row-lg-6">
                                    <?php echo form_error('sque'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Answer *" name="sans" value="<?php echo set_value('sans'); ?>" />
                                <div class="row-lg-6">
                                    <?php echo form_error('sans'); ?>
                                </div>
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                            <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-primary','style'=>'border-radius:50px;margin-top:30px;width:130px']);?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>