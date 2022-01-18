<?php
session_destroy();
unset($_SESSION['currentAdmin']);

setcookie("currentAdmin","",time()-(86400*50));
header("location:login.php");
?>