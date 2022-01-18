<?php

require_once("config.php");

if(isset($_REQUEST["add_product"])){
    $product_title=$_REQUEST['product_title'];
    $product_category=$_REQUEST['product_category'];
    $product_desc=$_REQUEST['product_desc'];
    $orginal_price=$_REQUEST['orginal_price'];
    $product_price=$_REQUEST['offers_price'];
    $photo=$_REQUEST['photo'];

    $photo=explode(".",$_FILES["photo"]["name"]);
    $photo=end($photo);
    $photo_name=rand().".".$photo;

    $insertQuery="INSERT INTO `offers`(`product_title`,`product_category`,`product_desc`, `product_image`, `orginal_price`, `product_price`) VALUES ('$product_title','$product_category','$product_desc','$photo_name','$orginal_price','$product_price')";
    $runQuery=mysqli_query($connect,$insertQuery);

    if($runQuery){
        move_uploaded_file($_FILES['photo']['tmp_name'],'product_images/'.$photo_name);
    }

    if($runQuery==true){
        header("location: add_product.php?offersRight");
    }
    else{
        echo "data do not insert";
    }

}

?>