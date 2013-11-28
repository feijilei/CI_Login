<!DOCTYPE HTML>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
<h1>Reset Password</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('send'); ?>

<label for="email">Email</label>
<input type="text" placeholder="Email address" name="email" id="email" value="<?php echo set_value('email'); ?>">
<input type="submit" value="Submit"/>

<?php echo anchor('login', 'Return To Login', 'title="Login"'); ?>

</form>
</body>
</html>
