<?php require_once('includes/top.php');
require_once('config.php');
?>
<!--custom css -->
<Link rel="stylesheet" href="css/checkout.css">

<title>Rs-X</title>
</head>
<body>

<?php
require_once('includes/nav.php');
?>

            <a href="index.php"><i class="fas fa-home"></i> HOME</a>
            <a href="#"><i class="fab fa-product-hunt"></i> PRODUCTS</a>
            <a href="#"><i class="fas fa-blog"></i> BLOG</a>
            <a href="admin/dashboard.php"><i class="fas fa-users-cog"></i> ADMIN</a>
            <a href="#" class='closebtn' onclick="closefunction()">&times;</a>

    </div>
</header>

<section class="checkoutWrapper">
    <div class="checkoutHeading">
        <h2>Checkout</h2>
        <hr/>
    </div>

    <?php

    if(isset($_REQUEST['id'])){
        $id= base64_decode($_REQUEST['id']);

        $selectQuery="SELECT * FROM `products` WHERE `product_id`='$id'";
        $runQuery=mysqli_query($connect,$selectQuery);
        $row=mysqli_fetch_assoc($runQuery);

        $product_category=$row['product_category'];

    }

    ?>


    <div class="billingDetails">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="allInputBoxWrapper">
                        <h3 class="mb-4">Billing Details <span> (Fillup Carefully)</span></h3>
                        <form action="checkout%20core.php" method="post">

                            <?php

                            if(isset($_REQUEST['right'])){
                                echo '<span class="text-success text-center">We Have Successfully Received Your Order! We Will Contact You Shortly !</span>';
                            }

                            ?>

                            <div class="form-group">
                                <input hidden type="text" class="form-control" value="<?php echo $id ?>"  name="productId" required>
                            </div>
                            <div class="form-group">
                                <input hidden type="text" class="form-control" value="<?php echo $product_category ?>"  name="product_category" required>
                            </div>
                            <div class="form-group">
                                <label for="fullname">Full name*</label>
                                <input type="text" class="form-control" placeholder="Enter Full Name" name="fullname" required>
                            </div>
                            <div class="form-group">
                                <label for="city">City*</label>
                                <select class="form-control" name="city" required>
                                    <option value="">Select City</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="mymensingh">Mymensingh</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="rangpur">Rangpur</option>
                                    <option value="comilla">Comilla</option>
                                    <option value="narayanganj">Narayanganj	</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="district">District*</label>
                                <input type="text" class="form-control" placeholder="Enter District" name="district" required>
                            </div>
                            <div class="form-group">
                                <label for="thana">Thana (Post code)*</label>
                                <input type="text" class="form-control" placeholder="Enter Thana" name="thana" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number*</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email Address" name="email">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Product Quantity*</label>
                                <select class="form-control" name="quantity" required>
                                    <option value="">Select Quantity</option>
                                    <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                    <option value="six">6</option>
                                    <option value="seven">7</option>
                                    <option value="eight">8</option>
                                    <option value="nine">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-7">

                    <?php

                    if(isset($_REQUEST['right'])){
                        echo '<h3 class="text-center mt-4 mb-3 text-success">Yahoo!! Congratulations Sir.</h3>
                                <p class="text-center text-info">We Have Successfully Received Your Order! We Will Contact You Shortly <i class="fas fa-phone"></i></p>
                                ';
                    }else{

                        $price= $row['product_price'];
                        $total=$price+5+120;

                    ?>

                        <div class="yourOrderWrapper">
                        <div class="orderHeading">
                            <h3>Your Order <span>(Cash On Delivery Charge Inside Dhaka +35 And Outside Dhaka +120)</span></h3>
                        </div>

                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col">PRODUCT</th>
                                <th scope="col">SUBTOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong><img width="40" height="40"  src="admin/product_images/<?php echo $row['product_image']?>"/> Product Id</strong></td>
                                <td><strong class="text-success"><?php echo $row['product_id']?></strong></td>
                            </tr>
                            <tr>
                                <td><strong>Product Name</strong></td>
                                <td><strong class="text-success"><?php echo $row['product_title']?></strong></td>
                            </tr>
                            <tr>
                                <td><strong>Product Category</strong></td>
                                <td><strong class="text-success"><?php echo $row['product_category']?></strong></td>
                            </tr>
                            <tr>
                                <td><strong>Product Charge</strong></td>
                                <td><strong class="text-success">৳ <?php echo $row['product_price']?></strong></td>
                            </tr>
                            <tr>
                                <td><strong>Vat</strong></td>
                                <td><strong class="text-success">৳ 0</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Bkash Send Money <small>(01717453205)</small></strong></td>
                                <td><strong class="text-success">৳ 5</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Delivery Charge <small> (Outside Dhaka +120)</small></strong></td>
                                <td><strong class="text-success">৳ 120</strong></td>
                            </tr>
                            <tr>
                                <td><strong>TOTAL</strong></td>
                                <td><strong class="text-success">৳ <?php echo $total ?></strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <?php

                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</section>


<?php require_once('includes/footer.php')?>