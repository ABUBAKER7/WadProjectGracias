<?php
/**
 * Created by PhpStorm.
 * User: ANSARI
 * Date: 1/30/2019
 * Time: 2:51 PM
 */
$con = mysqli_connect("localhost","root","","gracias");
if(!$con){
    die("Conection failed".mysqli_connect_error());
}