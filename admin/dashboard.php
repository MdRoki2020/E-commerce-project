<?php
session_start();
require_once("config.php");
if(!isset($_COOKIE["currentAdmin"])){
    header("location:login.php");
}
?>

<?php
require_once('includes/top.php');

?>


<!--custom css -->
<Link rel="stylesheet" href="css/dashboard.css">

<title>Rs-X</title>
</head>
<body>

<?php
require_once('includes/nav.php');
?>

<a href="../index.php"><i class="fas fa-home"></i> HOME</a>
<a class="text-primary" href="#"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a>
<a href="add_product.php"><i class="far fa-plus-square"></i> ADD PRODUCT</a>
<a href="logout%20core.php"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
<a href="#" class='closebtn' onclick="closefunction()">&times;</a>

</div>

            <?php
                $selectQuery="SELECT * FROM `billing_details` ORDER BY id DESC;";
                $runQuery=mysqli_query($connect,$selectQuery);
                $count=mysqli_num_rows($runQuery);
            ?>

    <section class="dashboard">
        <div class="dashboardHeading">
            <h2>Dashboard</h2>
            <hr/>
        </div>
        <div class="alldashboardWrapper">
            <div class="row">
                <div class="col-sm-3">
                    <div class="dashboardWrapper">
                        <div class="singleDashboard">
                            <span>Orders</span>
                            <h2><?php echo $count?></h2>
                            <span><i class="icon fas fa-chart-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="dashboardWrapper">
                        <div class="singleDashboard2">
                            <span>Delivery</span>
                            <h2>Not Available</h2>
                            <span><i class="icon fas fa-chart-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="dashboardWrapper">
                        <div class="singleDashboard3">
                            <span>Income</span>
                            <h2>Not Available</h2>
                            <span><i class="icon fas fa-chart-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="dashboardWrapper">
                        <div class="singleDashboard4">
                            <span>Users</span>
                            <h2>Not Available</h2>
                            <span><i class="icon fas fa-chart-line"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recentorder">
        <div class="alert alert-primary" role="alert">
            Recent Orders
        </div>

        <table class="table table-bordered table-striped table-hover table-responsive mt-4">
            <thead>
            <tr>
                <th scope="col">PRODUCT ID</th>
                <th scope="col">PRODUCT CATEGORY</th>
                <th scope="col">CLINT NAME</th>
                <th scope="col">CLINT CITY</th>
                <th scope="col">CLINT THANA</th>
                <th scope="col">CLINT PHONE</th>
                <th scope="col">CLINT EMAIL</th>
                <th scope="col">CLINT QUANTITY</th>
                <th scope="col">CLINT ORDER DATE</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $selectQuery="SELECT * FROM `billing_details` ORDER BY id DESC;";
            $runQuery=mysqli_query($connect,$selectQuery);
            $count=mysqli_num_rows($runQuery);
            while($row=mysqli_fetch_assoc($runQuery)){  ?>


                <tr>
                    <th scope="row"><?php echo $row['product_id']?></th>
                    <td><?php echo $row['product_category']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['thana']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['quantity']?></td>
                    <td><?php echo $row['submit']?></td>
                </tr>

            <?php

            }

            ?>
            </tbody>
        </table>

    </section>



<?php require_once('includes/footer.php')?>