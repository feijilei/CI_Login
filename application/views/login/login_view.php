<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <link rel="shortcut icon" href="<?php echo base_url() . "/img/favicon.png" ?>" type="image/png">

    <script type="text/javascript" src="<?php echo base_url() . "js/jquery.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . "js/jquery-ui.js" ?>"></script>

    <link rel="stylesheet" href="<?php echo base_url() . "css/style.css" ?>">

    <script>
        $(document).ready(function () {
            $( "#wrapper" ).effect( "shake");
            $("#submit1").hover(
                function () {
                    $(this).animate({"opacity": "0.7"}, "slow");
                },
                function () {
                    $(this).animate({"opacity": "1"}, "slow");
                });
        });
    </script>
</head>
<body>

<div id="wrapper">
    <div id="wrappertop"></div>

    <div id="wrappermiddle">

        <h2>Login</h2>

        <div id="username_input">
            <div id="username_inputleft"></div>


            <div id="username_inputmiddle">
                <?php echo validation_errors(); ?>
                <?php echo form_open('verifylogin'); ?>
                <input type="text" name="username" id="url" placeholder="Username"
                       value="<?php echo set_value('username'); ?>">
                <img id="url_user" src="<?php echo base_url() . "img/mailicon.png" ?>" alt="">
            </div>
            <div id="username_inputright"></div>
        </div>
        <div id="password_input">
            <div id="password_inputleft"></div>
            <div id="password_inputmiddle">
                <input type="password" name="password" id="url" placeholder="Password">
                <img id="url_password" src="<?php echo base_url() . "img/passicon.png" ?>" alt="">
            </div>
            <div id="password_inputright"></div>
        </div>
        <div id="submit">
            <input type="image" src="<?php echo base_url() . "img/submit_hover.png" ?>" id="submit1" name="submit"
                   value="Sign In">
        </div>
        </form>
        <div id="links_left">
            <?php echo anchor('reset', 'Reset Password', 'title="Forgot Password? Reset..."'); ?>
        </div>
        <div id="links_right"><?php echo anchor('register', 'Register', 'title="Register Here"'); ?></div>
    </div>
    <div id="wrapperbottom"></div>


</div>

</body>
</html>
