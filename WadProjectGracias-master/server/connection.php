<?php

    $con = mysqli_connect('localhost','root','','gracias');

    if(!$con)
    {
        echo 'Not Connected to the Server';
    }

    if(!mysqli_select_db( $con,'gracias'))
    {
        echo 'Not Selected';
    }
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $name = ($_POST['Developer_Name']);
        $contact =($_POST['Developer_Contact']);
        $email = ($_POST['Developer_Email']);
        $social_media = ($_POST['Developer_Social_Media']);
    }

    $sql_query = "INSERT INTO about_us (dev_name, dev_contact, dev_email, social_media) VALUES ('$name' ,'$contact','$email','$social_media')";

    if(mysqli_query($con, $sql_query))
    {
        echo 'Not Executed';
    }
    else
    {
        echo 'Selected';
    }

   header("refresh:0; url=Insert_data.php");


    ?>





