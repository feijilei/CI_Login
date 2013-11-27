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
    <title>Register Here</title>
</head>
<body>
<h1 class="title">Welcome To Registration</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('goRegister'); ?>
<div class="rswitch">
    <input type="radio" name="sex" value="1" id="sex_f" class="register-switch-input" checked="checked">
    <label for="sex_f" class="register-switch-label">Female</label>
    <input type="radio" name="sex" value="2" id="sex_m" class="register-switch-input">
    <label for="sex_m" class="switch-label">Male</label>
</div>
<input type="text" class="rinput" placeholder="User Name" name="username" id="myusername" value="<?php echo set_value('username'); ?>">

<div id="valid"></div>
<input type="password" class="rinput" placeholder="Password" name="password" id="mypassword">
<input type="password" class="rinput" placeholder="Repeat Password" name="password2" id="mypassword2">
<input type="text" class="rinput" placeholder="Email address" name="email" id="email" value="<?php echo set_value('email'); ?>">
<input type="text" class="rinput" placeholder="Full Name" name="full_name" id="full_name" value="<?php echo set_value('username'); ?>">
<input type="date" class="rinput" id="birthday" name="birthday" value="<?php echo set_value('birthday'); ?>">

<input type="submit" value="Create Account" class="register-button" id="enter">
</form>


<h1 class="title"><a href="<?php echo base_url(); ?>">Back To Login</a></h1>

</body>
</html>
