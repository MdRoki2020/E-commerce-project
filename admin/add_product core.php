<?php

require_once("config.php");

if(isset($_REQUEST["add_product"])){
    $product_category=$_REQUEST['product_category'];
    $product_title=$_REQUEST['product_title'];
    $product_desc=$_REQUEST['product_desc'];
    $product_price=$_REQUEST['product_price'];
    $photo=$_REQUEST['photo'];

    $photo=explode(".",$_FILES["photo"]["name"]);
    $photo=end($photo);
    $photo_name=rand().".".$photo;

    $insertQuery="INSERT INTO `products`(`product_category`, `product_title`, `product_desc`, `product_image`, `product_price`) VALUES ('$product_category','$product_title','$product_desc','$photo_name','$product_price')";
    $runQuery=mysqli_query($connect,$insertQuery);

    if($runQuery){
        move_uploaded_file($_FILES['photo']['tmp_name'],'product_images/'.$photo_name);
    }

    if($runQuery==true){
        header("location: add_product.php?electronicsRight");
    }
    else{
        echo "data do not insert";
    }

}

?>