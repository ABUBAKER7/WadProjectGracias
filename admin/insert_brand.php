<?php
if(!isset($_SESSION['user_email'])){
    header('location: insert_brand.php?not_admin=You are not Admin!');
}

if(isset($_POST['insert_brand'])){
    //getting text data from the fields
    $brand_title = $_POST['brand_title'];

    $insert_brand = "insert into brands ( brand_title) 
                  VALUES ('$brand_title');";
    $insert_pro = mysqli_query($con, $insert_brand);
    if($insert_brand){
        //header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>
<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Insert New </span> Brand </h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-2 mt-auto">
            <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Brand </span> Title:</label>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-10 ">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                </div>
                <input type="text" class="form-control" id="pro_title" name="brand_title" placeholder="Enter Brand Title" >
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-2 mt-auto"></div>
        <div class="col-sm-9 col-md-10 col-lg-10">
            <button type="submit" name="insert_brand" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
        </div>
    </div>
</form>

