<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<base href="<?php echo base_url(); ?>">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="static/css/style.css" />

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="static/images/user.png" id="icon" alt="User Icon" width="100"/>
            </div>

            <!-- Login Form -->
            <form method="POST" action="auth/execLogin">
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email">
                <?php echo form_error('email');?>

                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
                <?php echo form_error('password');?>

                <input type="submit" class="fadeIn fourth" value="Log In">
                <p class="text-danger"><?php echo $this->session->flashdata('login_error')?></p>
                <div>(admin@admin.com / admin)</div>
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>

</body>

</html>