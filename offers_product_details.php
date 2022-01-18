<?php require_once('includes/top.php');
require_once('config.php');
?>
    <!--custom css -->
    <Link rel="stylesheet" href="css/offers_product_details.css">

    <title>Rs-X</title>
    </head>
    <body>

<?php
require_once('includes/nav.php');
?>

    <a href="index.php"><i class="fas fa-home"></i> HOME</a>
    <a class="text-primary" href="#"><i class="fab fa-product-hunt"></i> PRODUCT DETAILS</a>
    <a href="#"><i class="fas fa-blog"></i> BLOG</a>
    <a href="admin/dashboard.php"><i class="fas fa-users-cog"></i> ADMIN</a>
    <a href="#" class='closebtn' onclick="closefunction()">&times;</a>

    </div>

    </header>

    <section class="productDetailsHeadingWrapper">
        <div class="productDetailsHeading">
            <h2>Product Details</h2>
            <hr/>
        </div>
    </section>

<?php

if(isset($_REQUEST['id'])){
    $id= base64_decode($_REQUEST['id']);
}

$selectQuery="SELECT * FROM `offers` WHERE `id`='$id'";
$runQuery=mysqli_query($connect,$selectQuery);
$row=mysqli_fetch_assoc($runQuery);

?>

    <section class="productDetailsWrapper">
        <div class="productDetails">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="SingleProductImage">

                            <img width="350" height="250" class="zoom img-fluid img-thumbnail" src="admin/product_images/<?php echo $row['product_image']?>" data-zoom-image="admin/product_images/<?php echo $row['product_image']?>"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="singleProductDetails">
                            <h3><?php echo $row['product_title']?></h3>
                            <p><?php echo $row['product_desc']?></p>
                            <strong>৳ <?php echo $row['product_price']?></strong>
                        </div>
                        <div class="buttonWrapper">
                            <a href="offers_checkout.php?id=<?php echo base64_encode($row['id'])?>"><button class="btn btn-primary "><i class="fas fa-shopping-bag"></i> Buy Now</button></a>
                            <a href="#"><button class="btn btn-success "><i class="far fa-heart"></i>  Wish List</button></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="deliveryOptions">
                            <span class="option"><i class="fas fa-exclamation-circle"></i> Delivery Options</span>
                            <p><i class="fas fa-map-marker-alt"></i> Dhaka Mohammadpur</p>
                            <p><i class="fas fa-truck"></i> Home Delivery<span class="taka">৳35</span></p>
                            <p class="cashOnDelivery"><i class="far fa-money-bill-alt"></i> Cash On Delivery Available</p>
                            <span class="returnsWarranty mt-5"><i class="fas fa-exchange-alt"></i> Return & Warranty</span>
                            <p class="return mt-2"><i class="fas fa-undo-alt"></i> 7 Days Return</p>
                            <p><i class="far fa-calendar-alt"></i> Warranty Not Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="postMetaWrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="popularPost mt-4 ">
                        <h5>POPULAR POSTS</h5>
                        <hr/>
                        <div class="Post1 ">
                            <span><img width="60" height="60" src="images/post1.jpg"/> Beauty of Nature</span>
                        </div>
                        <div class="post2 mt-3">
                            <span><img width="60" height="60" src="images/post2.jpg"/> Shopping for New Dress</span>
                        </div>
                        <div class="post3 mt-3">
                            <span><img width="60" height="60" src="images/post3.jpg"/> Breathtaking Places</span>
                        </div>
                        <div class="post4 mt-3">
                            <span><img width="60" height="60" src="images/post4.jpg"/> Fashion Trend</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="archive mt-4 ">
                        <h5>ARCHIVE</h5>
                        <hr/>
                        <ul>
                            <li><i class="fas fa-arrows-alt"></i> <?php echo date('Y'); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="categories mt-4 ">
                        <h5>CATEGORIES</h5>
                        <hr/>
                        <ul>
                            <li><i class="fas fa-arrows-alt"></i> Fruits And Vegetables</li>
                            <li><i class="fas fa-arrows-alt"></i> Electronics</li>
                            <li><i class="fas fa-arrows-alt"></i> Beauty Products</li>
                            <li><i class="fas fa-arrows-alt"></i> Beverages</li>
                            <li><i class="fas fa-arrows-alt"></i> Health Products</li>
                            <li><i class="fas fa-arrows-alt"></i> Cooking</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="meta mt-4 ">
                        <h5>META</h5>
                        <hr/>
                        <ul>
                            <li><i class="fas fa-arrows-alt"></i> Log in</li>
                            <li><i class="fas fa-arrows-alt"></i> Entries feed</li>
                            <li><i class="fas fa-arrows-alt"></i> Comments feed</li>
                            <li><i class="fas fa-arrows-alt"></i> WordPress.org</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once('includes/footer.php')?>