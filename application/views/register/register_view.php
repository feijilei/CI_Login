<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>Registration</title>
    <meta name="author" content="Kutalia Merabi">
    <link rel="shortcut icon" href="<?php echo base_url()."img/favicon.png"?>" type="image/png">
    <script type="text/javascript" src="<?php echo base_url() . "js/jquery.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "js/jquery-ui.js" ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url()."css/register.css"?>">

    <script>
        $(document).ready(function () {
            $( ".register" ).effect( "shake",{direction:'up'});
            });
    </script>

</head>
<body>
<h1 class="title">Welcome To Registration</h1>

<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'register'); ?>
<?php echo form_open('goRegister',$attributes); ?>

<div class="rswitch">
    <input type="radio" name="sex" value="1" id="sex_f" class="register-switch-input" checked="checked">
    <label for="sex_f" class="register-switch-label">Female</label>
    <input type="radio" name="sex" value="2" id="sex_m" class="register-switch-input">
    <label for="sex_m" class="register-switch-label">Male</label>
</div>
<input type="text" class="rinput" placeholder="Username" name="username" id="username">
<input type="password" class="rinput" placeholder="Password" name="password" id="password">
<input type="password" class="rinput" placeholder="Repeat Password" name="password2" id="password2">
<input type="text" class="rinput" placeholder="Email address" name="email" id="email" value="<?php echo set_value('email'); ?>">
<input type="text" class="rinput" placeholder="Full Name" name="full_name" id="full_name" value="<?php echo set_value('username'); ?>">
<input type="date" class="rinput" id="birthday" name="birthday" value="<?php echo set_value('birthday'); ?>">

<input type="submit" value="Create Account" class="register-button" id="enter">
</form>


<h1 class="title"><a href="<?php echo base_url(); ?>">Back To Login</a></h1>

</body>
</html>
