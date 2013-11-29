<!DOCTYPE HTML>
<html>
<head>
    <title>Reset Password</title>
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
        <h2>Password Recovery</h2>

        <div id="username_input">
            <div id="username_inputleft"></div>
            <div id="username_inputmiddle">
                <?php echo validation_errors(); ?>
                <?php echo form_open('send'); ?>
                <input type="text" name="email" id="url" value="" placeholder="Email address">
                <img id="url_user" src="<?php echo base_url() . "/img/mailicon.png" ?>" alt="">
            </div>
            <div id="username_inputright"></div>
        </div>
        <div id="submit">
            <input type="image" src="<?php echo base_url() . "/img/submit_hover.png" ?>" id="submit1" name="submit"
                   value="Send to Email">
        </div>
        </form>

        <div id="links_left">
            <?php echo anchor('login', 'Return To Login', 'title="Login"'); ?>
        </div>
    </div>
    <div id="wrapperbottom"></div>
</div>
</body>
</html>
