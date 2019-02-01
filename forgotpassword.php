<?php

require "server/database_connection.php";
require "server/header_nav.php";
require "server/footer.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>Forget Password</title>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="forgotpassword">
    <meta name="keywords" content="HTML,CSS,BOOTSTRAP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<!--new navbar responsive-->
<?php  showNavbar();?>
<div class="container mid">
    <div>
        <h5><i class="fa fa-lock fa-4x "></i></h5>
        <h2>Forgot Password?</h2>
        <p>You can reset your password here.</p>
    </div>
    <div>
        <form id="register-form" role="form" autocomplete="off" class="form" action="" method="post">
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" id="email" name="email" placeholder=" email address"   type="email"
                           style="height: 40px; " onkeyup="checkmail(this.value)">
                    <span  id="email"></span>
                    <?php
                    $email='';
                    if(isset($_POST['recover-submit'])){
                    $email = $_POST['email'];
                    $_SESSION['value']=$email;
                    if(empty($email))
                    {
                        echo 'Please enter email first';
                    }
                    else{
                    $sel_user = "select * from registration where email='$email'";
                    $run_user = mysqli_query($con, $sel_user);
                    $check_user = mysqli_num_rows($run_user);
                    if($check_user == 0){
                        ?>

                        <h2>PLEASE RE-ENTER THE EMAIL </h2>
                        <p>The email you have entered is wrong .Please Make sure the email you have entered is right.</p>
<?php
                    }
                    else {
                        ?>
                        <input class="form-control" id="email" name="password" placeholder=" Enter New Password "   type="password"
                               style="height: 40px; ">
                        <div class="input-group">
                            <input class="form-control" id="email" name="conform_password" placeholder=" Confirm  Password "   type="password"
                                   style="height: 40px;">
                        </div>
                        <?php
                    }
                    }}
                    ?>

                </div>
            </div>
            <div class="form-group">
                <input name="recover-submit" class="btn btn-info" value="Reset Password" type="submit"
                       style=" width: 240px;height: 48px;">
            </div>

        </form>
    </div>
</div>
<!--footer -->
<?php showFooter()?>

<script>
    function checkmail(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("email").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "check_email.php?e=" + str, true);
        xmlhttp.send();
    }
</script>
</body>
</html>