<?php
/**
 * Created by PhpStorm.
 * User: ANSARI
 * Date: 1/22/2019
 * Time: 5:16 AM
 */

$con = mysqli_connect("localhost","root","","gracias");
if(!$con){
    die("Conection failed".mysqli_connect_error());
}
?>