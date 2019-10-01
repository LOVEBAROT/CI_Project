<?php include ('header.php');?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/login.css') ?>">
<?php echo form_open('register/login') ?>


<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
       <h2>Login Form</h2>

        <!-- Login Form -->

            <input type="text" id="login" class="fadeIn second" name="email" placeholder="email" value="<?php echo set_value('email'); ?>">
            <div class="row-lg-6">
                <?php echo form_error('email'); ?>
            </div>
            <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password" >
            <div class="row-lg-6">
                <?php echo form_error('pass'); ?>
            </div>

            <input type="submit" class="fadeIn fourth" value="Log In">


        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="<?php echo base_url("index.php/register/forgot_pass") ?>">Forgot Password?</a>
            <a class="underlineHover" href="<?php echo base_url("index.php/register") ?>" style="margin-left: 50px">New User Click Here</a>
        </div>


    </div>
</div>

