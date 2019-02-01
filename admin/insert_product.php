<?php
if(!isset($_SESSION['user_email'])){
    header('location: adminLogin.php?not_admin=You are not Admin!');
}

if(isset($_POST['insert_pro'])){
    //getting text data from the fields
    $pro_title = $_POST['pro_title'];
    $pro_brand = $_POST['pro_brand'];
    $pro_price = $_POST['pro_price'];
    $pro_desc = $_POST['pro_desc'];

    //getting image from the field
    $pro_image = $_FILES['pro_image']['name'];
    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];
    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");


    $insert_product = "insert into products ( pro_brand,pro_name,pro_price,pro_desc,pro_image) 
                  VALUES ('$pro_brand','$pro_title','$pro_price','$pro_desc','$pro_image');";
    $insert_pro = mysqli_query($con, $insert_product);
    if($insert_pro){
        //header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>
<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Insert New </span> Product </h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-2 mt-auto">
            <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Title:</label>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-10 ">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                </div>
                <input type="text" class="form-control" id="pro_title" name="pro_title" placeholder="Enter Product Title" >
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-2  col-lg-2 mt-auto">
            <label for="pro_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Brand:</label>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-stamp"></i></div>
                </div>
                <select class="form-control" id="pro_brand" name="pro_brand">
                    <option>Select Brand</option>
                    <?php
                    $getBrandsQuery = "select * from brands";
                    $getBrandsResult = mysqli_query($con,$getBrandsQuery);
                    while($row = mysqli_fetch_assoc($getBrandsResult)){
                        $brand_id = $row['brand_id'];
                        $brand_title = $row['brand_title'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-2 mt-auto">
            <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Image:</label>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-image"></i></div>
                </div>
                <input class="form-control" type="file" id="pro_image" name="pro_image">
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-2 mt-auto">
            <label for="pro_price" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Price:</label>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                </div>
                <input class="form-control" id="pro_price" name="pro_price" placeholder="Enter Product Price">
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-2 mt-auto">
            <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Detail:</label>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                </div>
                <textarea class="form-control" type="file" id="pro_desc" name="pro_desc" placeholder="Enter Product Detail"></textarea>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-2 mt-auto"></div>
        <div class="col-sm-9 col-md-10 col-lg-10">
            <button type="submit" name="insert_pro" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
        </div>
    </div>
</form>

