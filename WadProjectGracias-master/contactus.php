<?php 
require_once("dbcontactus.php");
if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !='')&& (isset($_POST['subject'])&& $_POST['subject'] !='')&& (isset($_POST['message'])&& $_POST['message'] !=''))
{
 
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);
 
$query=mysqli_query($conn,"INSERT INTO contact_us(name, email, subject, message) VALUES ('".$name."','".$email."', '".$subject."', '".$message."')") or die(mysqli_error($conn));
header('Location: contactus.php?success=true');
}

?>


<!DOCTYPE html>
<html lang="en">
<title>Contact us</title>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Contactus">
    <meta name="keywords" content="HTML,CSS,BOOTSTRAP">
    <meta name="author" content="ABUBAKER,Maroof">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="refresh" content="30">-->


    <!--link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="css/stylesheet.css">
    <style>
        img {
            width: 100%;
            height: auto;
        }        
  body { 
  background: url(c2.jpg)
 no-repeat center center fixed;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;

}

</style>
</head>
<?php
    
     if( isset($_GET['success']) && $_GET['success'] == true){  ?>
         <script type='text/javascript'>
         	
         	if (window.confirm('Your Message Submitted Successfully.'))
			{
			   window.location = "contactus.php";
			}
			else
			{
			   window.location = "contactus.php";
			}
        </script>
      <?php } ?>

      



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
                <a class="nav-link" href="register.html">Sign Up</a>
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


<div class="container" style="color: white" >
    <h1 class="text-center my-4">CONTACT US </h1>

<!-- //////////////// -->

        
        <div class="row" style="margin-top: 45px; ">
            <div class="col-xs-2 col-sm-5 col-md-6 col-lg-6  ">

                <div>
                    <h4>FOLLOW US</h4>
                    <i class="fab fa-facebook-square"></i>
                    &nbsp;
                    <i class="fab fa-twitter"></i>
                    &nbsp;
                    <i class="fas fa-envelope"></i>
                    &nbsp;
                    <i class="fab fa-google-plus-g"></i>
                </div>
                <br>
                <div >
                    <h4> ADDRESS</h4>
                    <H6><i class="fas fa-map-marker-alt"></i> 1-Khayaban-e-Jinnah،Road<br>Johar Town,Lahore,Punjab</H6>
                </div>
                <br>
                <div>
                    <h4>  CONTACT US</h4>
                    <h6><i class="fas fa-phone-square"></i> +923355969393</h6>
                    <h6><i class="fas fa-envelope"></i> info@gracias.com</h6>
                </div>
                <br>
                <div>
                    <h4>OPEN HOURS</h4>
                    <h6>8:00 AM TO 5:00 PM</h6>
                </div>
            </div>



            <div class="col-xs-2 col-sm-5 col-md-6 col-lg-6 ">
                <div>
                	
                    <h3>GET IN TOUCH</h3>
                    <h6>Please complete and submit this form and We will reply you as soon as possible.</h6>
                    <div>

                    
                    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="contactus">
                        <div class="form-group ">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="" required="">
                        </div>
                        <div class="form-group ">
                            <input type="text" placeholder="example@example.com" class="form-control" name="email" value="" required="" pattern="[^ @]*@[^ @]*" >
                        </div>
                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control"  placeholder="Subject" name="subject" value="" required="">
                    </div>


                    <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="leave your Message" name="message" required=""></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default" value="submit" style="width: 125px; height: 40px;
                        background-color:springgreen"><h5><b>SUBMIT</b></h5></button>
                    </div>

                </div>
            </form>
            
            </div>

        </div>
 


<!-- //////////////// -->

</div>
<br>
<!--map-->
<div>
    <img src="Images/c1.PNG">
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
                        <a class="nav-link" href="register.html">Become a Member</a>
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