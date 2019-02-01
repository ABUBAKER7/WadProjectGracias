<?php

require "server/database_connection.php";
require "server/header_nav.php";
require "server/footer.php";

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
    <title>SignUp</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS">
    <meta name="description" content="gracias-signup,gracias-register">
    <meta name="author" content="Shoaib">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/custom.css">

    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>

</head>
<body>
<!--new navbar responsive-->
<?php  showNavbar();?>
<div class=" container  mt-3"> <h4 class="my-4 margin-left lead "><i class="fas fa-user-alt"></i><span class="d-none d-sm-inline "> Create your  </span> Gracias Account </h4></div>
<div class="my-container container mt-2 pt-5 pb-5">
    <form action="register.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-2   col-md-2">
                <label class="float-md-right d-none d-sm-inline "> <span class="d-none d-lg-inline  "> Full</span> Name:  </label>
            </div>

            <div class=" col-sm-10 col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control fontstyle" id="id_name"  name="pro_name"  placeholder="Enter Full Name"
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
                           onkeyup="checkEmail(this.value)" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    <span class="text-danger" id="hint"></span>
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
                    <input type="text" class="form-control fontstyle"  id="pro_num"  name="pro_num" placeholder="Enter Phone Number " required pattern="^(03|\+92(\s|-)?3|0092(\s|-)?3)\d{2}(\s|-)?\d{7}$" >
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

<?php showFooter()?>
<script>
    function checkEmail(str) {
        if (str.length == 0) {
            document.getElementById("hint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("hint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "check_email.php?e=" + str, true);
            xmlhttp.send();
            //document.getElementById('hint').innerHTML = 'loading...';
        }
    }
</script>
</body>
</html>
