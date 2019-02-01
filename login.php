<?php
/**
 * Created by PhpStorm.
 * User: ANSARI
 * Date: 1/22/2019
 * Time: 10:35 PM
 */
require "server/database_connection.php";
require "server/footer.php";
require "server/header_nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="description" content="login-gracias">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="80">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="css/stylesheet.css">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<?php  showNavbar();
session_start();
include ('server/database_connection.php');
$error_msg ="  ";
    if(isset($_POST['login'])) {
        $emailfrompage = $_POST['email'];
        $passfrompage = $_POST['password'];
        $select_user = "select * from login where login_email='$emailfrompage' AND login_password='$passfrompage'";
        $run_user = mysqli_query($con, $select_user);
        $check_user = mysqli_num_rows($run_user);
        if ($check_user == 0)
            $error_msg = 'Password or Email is wrong, try again';
        else {
            $_SESSION['user_email'] = $emailfrompage;
            if (!empty($_POST['remember'])) {
                setcookie('user_email', $emailfrompage, time() + (10 * 24 * 60 * 60));
                setcookie('user_pass', $passfrompage, time() + (10 * 24 * 60 * 60));
            } else {
                setcookie('user_email', '');
                setcookie('user_pass', '');
            }

            header('location:index.php?logged_in=You have successfully logged in!');
        }/*
        if($error_msg != '') {
            echo $msg;
            $error_msg = " ";
        }
        else
            echo "You are logged in";
*/
    }
?>
<form action="login.php" method="post" enctype="multipart/form-data" class="login-form">
    <div class="login-container col-sm-8">
        <div class="form-group">
            <label for="exampleInputEmail1" required >Email address</label>
            <input type="email" class="form-control" name= "email" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="example@example.com"
                  required pattern= '\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+' >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control " id="exampleInputPassword1" name="password" required placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Stay loged in</label>
        </div>
<!--        <button type="submit" class="btn btn-primary" name="login">Submit</button>-->
        <button type="submit"  class="w-100 btn btn-primary">Member</button>

    </div>
</form>
<?php showFooter()?>
</body>
</html>
