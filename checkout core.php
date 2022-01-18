<?php
require_once('config.php');


$productId=$_REQUEST['productId'];
$product_category=$_REQUEST['product_category'];
$fullname=$_REQUEST['fullname'];
$city=$_REQUEST['city'];
$district=$_REQUEST['district'];
$thana=$_REQUEST['thana'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$quantity=$_REQUEST['quantity'];


$insertQuery="INSERT INTO `billing_details`(`product_id`, `product_category`, `name`, `city`, `district`, `thana`, `phone`, `email`, `quantity`) VALUES ('$productId','$product_category','$fullname','$city','$district','$thana','$phone','$email','$quantity')";
$runQuery=mysqli_query($connect,$insertQuery);

if($runQuery){
    header('location:checkout.php?right');
}else{
    echo "Something Went Wrong Please Try Again Later";
}

?>