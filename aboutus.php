<?php
require "server/database_connection.php";
require "server/header_nav.php";
require "server/footer.php";
session_start();

if(!isset($_SESSION['user_email'])){
    //  header('location: adminLogin.php?not_admin=You are not Admin!');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
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

<!--new navbar responsive-->

<?php  showNavbar();?>

<!--About Us-->
<div class="jumbotron jumbotron-fluid banner-image">
    <div class="container">
        <h1 class="display-4">About Us</h1>
        <div class="ex1">
            Gracias.pk is a dream to change the fashion trend of pakistan. This is a company birthed out of an ambitious investment in the fashion industry 			by the visionary team. We believe in satisfying customers through our quality and brilliant customer service. You will find 						the most soft and trending clothes for men in our store. You wont find the vast varity of Men's Fashion any where in the world
        </div>
        <br>
        <div class="ex1">
            As the progressive world is moving towards digitalization we are operational only online. We will be opening Retail very soon.
        </div>
        <br>
        <div class="ex1">
            The company is steadily growing and now has set foot in the international market, with aims to elevate the brand into a truly global player.
        </div>
        <hr class="my-4">
    </div>
</div>
<!--first row of imgs-->

<div class="container">
    <h1 class="display-4">Developers</h1>
    <div class="row">

        <div>
            <img class = "Developers" src="Images/pp1.jpg" style="margin-right: 50px; margin-left: 70px">
            <div class="Info col-sm-2 " style="margin-top: 20px; margin-right: 50px; margin-left: 50px">
                <b>ABDULLAH SHAFIQUE</b> <br>
                <b>03124038880</b> <br>
                <a href = "abdullah.shafique5555@gmail.com"><b>EMAIL</b></a> <br>
                <a href = "https://www.facebook.com/abdullah.shafique.313"><b>FACEBOOK</b></a> <br>
            </div>
        </div>

        <div>
            <img class = "Developers" src="Images/pp2.jpg" style="margin-right: 50px; margin-left: 100px">
            <div class="Info col-sm-2 " style="margin-top: 20px; margin-right: 50px; margin-left: 100px">
                <b>M. ABUBAKER</b> <br>
                <b>03355969393</b> <br>
                <a href = "Abubakar7@ucp.edu.pk"><b>EMAIL</b></a> <br>
                <a href = "https://www.facebook.com/profile.php?id=100007037583136"><b>FACEBOOK</b></a> <br>
            </div>
        </div>

        <div>
            <img class = "Developers" src="Images/p3.jpg" style="margin-right: 50px; margin-left: 100px">
            <div class="Info col-sm-2 " style="margin-top: 20px; margin-right: 50px; margin-left: 100px">
                <b>M. ZAHID RAMZAN</b> <br>
                <b>03157513094</b> <br>
                <a href = "zahidensari116@ucp.edu.pk"><b>EMAIL</b></a> <br>
                <a href = "https://www.facebook.com/profile.php?id=100010142373715"><b>FACEBOOK</b></a> <br>
            </div>
        </div>
    </div>

    <!--second row of imgs-->
    <div class="row">

        <div>
            <img class = "Developers" src="Images/pp4.jpg" style="margin-top: 40px; margin-right: 50px; margin-left: 70px">
            <div class="Info col-sm-2 " style="margin-top: 10px; margin-right: 50px; margin-left: 50px">
                <b>RANA MAROOF</b> <br>
                <b>03078127004</b> <br>
                <a href = "maroofrana10@gmail.com"><b>EMAIL</b></a> <br>
                <a href = "https://www.facebook.com/rana.maroof.12"><b>FACEBOOK</b></a> <br>
            </div>
        </div>

        <div>
            <img class = "Developers" src="Images/pp5.jpg" style="margin-top: 40px; margin-right: 50px; margin-left: 130px">
            <div class="Info col-sm-2 " style="margin-top: 20px; margin-right: 50px; margin-left: 130px">
                <b>SHOAIB AKRAM</b> <br>
                <b>03211145424</b> <br>
                <a href = "Shoaibakram756@gmail.com"><b>EMAIL</b></a> <br>
                <a href = "https://www.facebook.com/ms112962"><b>FACEBOOK</b></a> <br>
            </div>
        </div>

        <div>
            <img class = "Developers" src="Images/pp6.jpg" style="margin-top: 40px; margin-right: 50px; margin-left: 100px">
            <div class="Info col-sm-2 " style="margin-top: 20px; margin-right: 50px; margin-left: 100px">
                <b>MAAZ BUKHSH</b> <br>
                <b>03228602733</b> <br>
                <a href = "maazbukhsh7@gmail.com"><b>EMAIL</b></a> <br>
                <a href = "https://www.facebook.com/maaz.bukhsh.3"><b>FACEBOOK</b></a> <br>
            </div>
        </div>
    </div>
</div>

<!--footer -->
<?php showFooter()?>
</body>
</html>