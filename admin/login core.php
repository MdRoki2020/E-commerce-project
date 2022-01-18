<?php
require_once('config.php');

$email=htmlentities(htmlspecialchars(strip_tags(addslashes(mysqli_real_escape_string($connect,$_REQUEST["email"])))));
$password=htmlentities(htmlspecialchars(strip_tags(addslashes(mysqli_real_escape_string($connect,$_REQUEST["password"])))));


$selectQuery="SELECT * FROM `login` WHERE email='$email' AND password='$password'";

$runQuery=mysqli_query($connect,$selectQuery);

$chakeCount= mysqli_num_rows($runQuery);

if($runQuery==true){
    if($chakeCount===1){
        setcookie("currentAdmin",$email,time()+(86400*7));
        header("location:dashboard.php");

    }else{
        header('location:login.php?wrong');
    }
}



?>