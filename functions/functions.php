<?php
/**
 * Created by PhpStorm.
 * User: ANSARI
 * Date: 2/1/2019
 * Time: 5:11 PM
 */

require "./server/database_connection.php";

function getimage(){
    global $con;

    $getProResult = mysqli_query($con,"select * from products ;");
    while($row = mysqli_fetch_assoc($getProResult)){
        $pro_id = $row['pro_id'];
        $pro_title = $row['pro_name'];
        $pro_price = $row['pro_price'];
        $pro_image = $row['pro_image'];
        ?>
        <div class='col-sm-6 col-md-4 col-lg-3 text-center product-summary' style='padding-top: 3%;'>
            <div class='text-capitalize' style='color:blue; margin-right: 100px;'> <?php echo $pro_title ?></div>

            <div style=" box-sizing: border-box; width: 100%; height: auto; display: inline-flex; margin-bottom:10%; overflow: hidden; "><a href='#'>
                    <img src='admin/product_images/<?php echo $pro_image; ?>' class='hover'></a>

                <div style='position: absolute;
    display: inline-block;
    bottom:22%;
    background: orange;
    color: white;
    height: 1.5rem;
    width: auto;
    transform: rotate(-10deg);
   '>Rs:<?php echo $pro_price ?>
                </div>
            </div>
            <div style='margin-right: 100px;'>
                <a href='#' class='btn btn-primary shadow btn-lg'>
                    <i class='fas fa-cart-plus ' ></i> Add to Cart
                </a>
            </div>
        </div>
        <?php
    }
}
