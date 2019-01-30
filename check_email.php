<?php
require "db_connection.php";
$e = $_REQUEST["e"];
$sel_email = "select * from login where login_email = '$e'";
$run_email  = mysqli_query($con,$sel_email);
$count = mysqli_num_rows($run_email);
if($count>0)
    echo "Already registered";