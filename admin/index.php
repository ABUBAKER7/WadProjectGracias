<?php

require "../server/database_connection.php";
require "header_nav.php";
require "footer.php";
session_start();
require_once "dbconnection.php";
if(!isset($_SESSION['user_email'])){
    header('location: adminLogin.php?not_admin=You are not Admin!');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <title>Gracias Admin Panel</title>
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<?php  showNavbar();?>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
<!--            <h3><img src="../media/logo.png"> Admin Panel</h3>-->
            <h3>Admin Panel</h3>
        </div>
        <ul class="navbar-dark bg-dark lists list-group components">
            <li>
                <a href="index.php?insert_product">
                    <i class="fas fa-plus"></i> Insert New Product
                </a>
            </li>
            <li>
                <a href="index.php?view_products">
                    <i class="fas fa-sitemap"></i> View All Products
                </a>
            </li>
            <li>
                <a href="index.php?insert_brand">
                    <i class="fas fa-plus"></i> Insert New Brand
                </a>
            </li>
            <li>
                <a href="index.php?view_brands">
                    <i class="fas fa-toolbox"></i> View All Brands</a>
            </li>
            <li>
                <a href="index.php?view_orders">
                    <i class="fa fa-shopping-bag"></i> View Orders</a>
            </li>
            <li>
                <a href="index.php?view_payments">
                    <i class="fa fa-credit-card"></i> View Payments</a>
            </li>
            <li>
                <a href="adminLogout.php">
                    <i class="fa fa-sign-out-alt"></i> Admin logout</a>
            </li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn " >
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <div class="container">
            <h2 class="text-center text-primary"><?php echo @$_GET['logged_in']?></h2>
            <?php
            if(isset($_GET['insert_product'])){
                include ('insert_product.php');
            }
            else if(isset($_GET['view_products'])){
                include ('show_products.php');
            }
            else if(isset($_GET['edit_pro'])){
                include ('update_product.php');
            }
            else if(isset($_GET['del_pro'])){
                include ('delete_product.php');
            }
            else if(isset($_GET['view_brands'])) {
                include('view_brands.php');
            }
            else if(isset($_GET['insert_brand'])) {
                include('insert_brand.php');
            }
            else if(isset($_GET['edit_brand'])) {
                include('edit_brand.php');
            }
            else if(isset($_GET['del_brand'])) {
                include('del_brand.php');
            }
            ?>
        </div>
    </div>
</div>
<!--footer -->
<?php showFooter()?>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>
</body>
</html>