<?php
require "server/database_connection.php";
require "server/header_nav.php";
require "server/footer.php";
require "functions/functions.php";
session_start();

if(!isset($_SESSION['user_email'])){
  //  header('location: adminLogin.php?not_admin=You are not Admin!');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gracias</title>
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
<?php  showNavbar();?>
<div class="jumbotron jumbotron-fluid banner-image">
	<div class="container">
		<h1 class="display-4">Your T-Shirt Your Design</h1>
		<p class="lead">Be Innovative And wear your own design</p>
		<hr class="my-4 mx-auto">
		<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</div>
</div>
<!--maaz work-->

<article id="content" class="container-fluid bg-white ">

    <div class="row">
        <?php getimage(); ?>
    </div>
</article>

<!--footer -->
<?php showFooter()?>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>
</body>
</html>