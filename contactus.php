<?php
require "server/database_connection.php";
require "server/header_nav.php";
require "server/footer.php";
if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !='')&& (isset($_POST['subject'])&& $_POST['subject'] !='')&& (isset($_POST['message'])&& $_POST['message'] !=''))
{

    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $subject = $con->real_escape_string($_POST['subject']);
    $message = $con->real_escape_string($_POST['message']);

    $query=mysqli_query($con,"INSERT INTO contact_us(name, email, subject, message) VALUES ('".$name."','".$email."', '".$subject."', '".$message."')") or die(mysqli_error($conn));
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background: url(Images/c2.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }
         * {
             font-family: 'Old Standard TT', serif;
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
<?php  showNavbar();?>

<div class="container" style="color: white" >
    <h1 class="text-center my-4">CONTACT US </h1>
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
</div>
<br>
<!--map-->
<div>
    <img src="Images/c1.PNG">
</div>
<!--footer -->
<?php showFooter()?>
</body>
</html>