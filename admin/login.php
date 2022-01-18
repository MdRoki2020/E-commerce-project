<?php require_once('includes/top.php');
require_once('config.php');
?>
<!--custom css -->
<Link rel="stylesheet" href="css/login.css">

<title>Rs-X</title>
</head>
<body>

<?php
require_once('includes/nav.php');
?>

<a href="../index.php"><i class="fas fa-home"></i> HOME</a>
<a  href="#"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a>
<a href="add_product.php"><i class="far fa-plus-square"></i> ADD PRODUCT</a>
<a class="text-primary" href="#"><i class="fas fa-sign-out-alt"></i> ADMIN</a>
<a href="#" class='closebtn' onclick="closefunction()">&times;</a>

</div>

    <section class="loginHeadingwrapper">

    </section>
    <section class="loginBoxWrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    <div class="loginform">
                        <div class="text-center mt-2"><h3>Admin Login</h3></div>
                        <div class="popupMsz">
                            <?php
                            if(isset($_REQUEST['wrong'])){
                                echo "Wrong Email Or Password";
                            }
                            ?>
                        </div>
                        <form action="login core.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="form-control btn btn-primary mt-3"><i class="fas fa-sign-in-alt"></i> Login</button>
                        </form>
                    </div>

                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </section>




<?php require_once('includes/footer.php')?>