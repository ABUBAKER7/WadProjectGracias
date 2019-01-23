<?php

require_once "db_connection.php";
if(isset($_POST['sign_up']))
{
    $pro_name = $_POST['pro_name'];
    $pro_email =$_POST['pro_email'];
    $pro_num = $_POST['pro_num'];
    $pro_password =$_POST['pro_password'];
    $pro_birthdate = $_POST['pro_birthdate'];
    $pro_gender = $_POST['pro_gender'];

    $insert_user = "insert into registration (full_name , phone_number , email , pasword , gender , dob) 
                  VALUES ('$pro_name','$pro_num','$pro_email','$pro_password','$pro_gender','$pro_birthdate');";
    $sign_up = mysqli_query($con, $insert_user);

    $inert_login="insert into login(login_email, login_password) VALUES ('$pro_email','$pro_password');";
    $login=mysqli_query($con, $inert_login);
    if($sign_up){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS">
    <meta name="description" content="gracias-signup,gracias-register">
    <meta name="author" content="Shoaib">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>SignUp</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="css/register_stylesheet.css">

</head>
<body>
<!--new navbar responsive-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Gracias</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.html">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="login.html">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="forgotpassword.html">Forgot Password</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container  mt-3"> <h4 class="my-4 marginleft lead "><i class="fas fa-user-alt"></i><span class="d-none d-sm-inline "> Create your  </span> Gracias Account </h4></div>
<div class="container bg-white mt-2 pt-5 pb-5">
    <form class="my_container" action="register.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-2   col-md-2">
                <label class="float-md-right d-none d-sm-inline "> <span class="d-none d-lg-inline  "> Full</span> Name:  </label>
            </div>

            <div class="col-12 col-sm-10 col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control fontstyle" id="c_name"  name="pro_name"  placeholder="Enter Full Name"
                           required pattern="^[A-Z]?[a-z]\w*?" >
                </div>
            </div>
            <div class="mt-sm-1 mt-lg-0 col-sm-2  mt-2  col-md-2">
                <label  class="float-md-right d-none d-sm-inline"><span class="d-none d-lg-inline "></span> Email:</label>
            </div>
            <div class="mt-sm-1 mt-lg-0 col-12 col-sm-10 col-md-4 ">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                    </div>
                    <input type="text" class="form-control fontstyle" id="pro_email"  name="pro_email"  placeholder="Enter email"
                           required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
            </div>
        </div>
        <div class="row my-2 mt-lg-4">
            <div class=" mt-sm-1 col-sm-2 col-md-2">
                <label class="float-md-right d-none d-sm-inline"> <span class="d-none d-lg-inline">  </span> Number:</label>
            </div>
            <div class=" mt-sm-1 mt-lg-0 col-12 col-sm-10 col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-phone"></i></div>
                    </div>
                    <input type="text" class="form-control fontstyle"  id="pro_num"  name="pro_num" placeholder="Enter Phone Number " required pattern="\d{11}" >
                </div>
            </div>
            <div class=" mt-sm-1  mt-lg-0 col-sm-2    col-md-2">
                <label class="float-md-right d-none d-sm-inline"><span class="d-none d-lg-inline"></span> Code:</label>
            </div>
            <div class=" mt-sm-1  mt-lg-0 col-12 col-sm-10 mt-2 col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control fontstyle" id="pro_code"   placeholder="SMS Verification Code " required pattern="\d+" >
                </div>
            </div>
        </div>
        <div class="row my-2 mt-lg-4">
            <div class=" mt-sm-1 mt-lg-0 col-sm-2 col-md-2">
                <label  class=" float-md-right d-none d-sm-inline"> <span class="d-none d-lg-inline"></span>Password:</label>
            </div>
            <div class="mt-sm-1  mt-lg-0 col-12 col-sm-10 col-md-4">
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input type="password" class="form-control fontstyle" id="pro_password"  name="pro_password" placeholder="Minimum lenght 6" required pattern="\d*?\w*?">
                </div>
            </div>
            <div class=" mt-sm-1 mt-lg-0 col-sm-2    col-md-2">
                <label class="float-md-right d-none d-sm-inline"><span class="d-none d-lg-inline"></span> Birth Date:</label>
            </div>
            <div class="mt-sm-1 mt-lg-0 col-12 col-sm-10 mt-2  col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-birthday-cake"></i></div>
                    </div>
                    <input class="form-control fontstyle"  type="date" id="start" name="pro_birthdate">
                </div>

            </div>
        </div>

        <div class="row my-2 mt-lg-4">
            <div class=" mt-sm-1  mt-lg-0 col-sm-2  col-md-2">
                <label class="float-md-right d-none d-sm-inline"><span class="d-none d-lg-inline"></span>Gender:</label>
            </div>
            <div class="mt-sm-1 mt-lg-0 col-12 col-sm-10 col-md-4 ">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <select class="form-control fontstyle" id="pro_gender"  name="pro_gender" >
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row my-2 mt-lg-4">
            <div class="mt-sm-1 mt-lg-0  offset-sm-2 col-12 col-sm-10 col-md-4">
                <button type="submit" name="sign_up" class="btn btn-outline-info  btn-block fontstyle"><i class="fas fa-plus"></i> SIGN UP </button>
            </div>
        </div>
    </form>
</div>
<!--footer -->
<footer class="page-footer font-small bg-dark ">
    <div style="background-color: #6351ce;">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h5 class="mb-0">Get connected with us on social networks!</h5>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right ">
                    <a class="">
                        <i class="fa fa-facebook white-text mr-4"> </i>
                    </a>
                    <a class="">
                        <i class="fa fa-twitter white-text mr-4"> </i>
                    </a>
                    <a class="">
                        <i class="fa fa-instagram white-text"> </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center text-md-left mt-5 footer_">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Gracias</h6>
                <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    Why go to malls when you can buy products of your own choice while sitting in your room or any where. Let Gracias help you
                    to find your best choice.
                </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Products</h6>
                <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="footer-links" href="#!">Men</a>
                    </li>
                    <li class="footer-links">
                        <a class="nav-link" href="#!">Women</a>
                    </li>
                    <li class="footer-links">
                        <a class="nav-link" href="#!">Child</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <ul class="navbar-nav mr-auto">
                    <li class="footer-links">
                        <a class="nav-link" href="login.html">Your Account</a>
                    </li>
                    <li class="footer-links">
                        <a class="nav-link" href="register.php">Become a Member</a>
                    </li>
                    <li class="footer-links">
                        <a class="nav-link" href="aboutus.html">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> University of Central Punjab, Lahore, Pakistan</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 921 234 567 88</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 921 234 567 89</p>

            </div>
        </div>
    </div>
</footer>
</body>
</html>
