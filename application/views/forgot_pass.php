<?php include ('header.php');?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/login.css') ?>">
<?php echo form_open('register/forgot_pass') ?>


<div class="wrapper fadeInDown">
    <div id="formContent">

        <h2>Forgot your Password</h2>



        <input type="text" id="login" class="fadeIn second" name="email" placeholder="email" value="<?php echo set_value('email'); ?>">
        <div class="row-lg-6">
            <?php echo form_error('email'); ?>
        </div>

        <input type="submit" class="fadeIn fourth" value="Get link">
    </div>
</div>

