<?php
require_once('config.php');
require_once('includes/top.php')
?>
    <!--custom css -->
    <Link rel="stylesheet" href="css/index.css">

    <title>Rs-X</title>
</head>
<body onload="invisible() ">
    <!-- --------preloader start-------- -->
    <div id="loading-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <img class="img-fluid" id="loader_gif" src="images/Loadingsome.gif"/>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>
    <!-- --------preloader end--------- -->

    <?php
require_once('includes/nav.php');
    ?>

        <a class="text-primary" href="index.php"><i class="fas fa-home"></i> HOME</a>
        <a href="electronics.php"><i class="fab fa-product-hunt"></i> PRODUCTS</a>
        <a href="#"><i class="fas fa-blog"></i> BLOG</a>
        <a href="admin/dashboard.php"><i class="fas fa-users-cog"></i> ADMIN</a>
        <a href="#" class='closebtn' onclick="closefunction()">&times;</a>

    </div>

</header>
<div class="totalCarouselWrapper">
    <div id="carouselExampleIndicators" class="carousel slide carouselStyle" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider01.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider02.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider03.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only back">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only go">Next</span>
        </a>
    </div>
</div>


<section class="categoriesWrapper">
    <div class="container">
        <div class="categories">
            <h2>Our Product Categories</h2>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <div class="singleCategories">
                        <span>Fruits And Vegetables <i class="fas fa-carrot"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="electronics.php">
                    <div class="singleCategories">
                        <span>Electronics  <i class="fas fa-laptop-medical"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <div class="singleCategories">
                        <span>Beauty Products <i class="fab fa-product-hunt"></i></span>
                    </div>
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <div class="singleCategories">
                        <span>Beverages <i class="fas fa-glass-cheers"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <div class="singleCategories">
                        <span>Health Products  <i class="fas fa-weight"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <div class="singleCategories">
                        <span>Cooking <i class="fas fa-cookie-bite"></i></span>
                    </div>
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <div class="singleCategories">
                        <span>Meat And Fish <i class="fas fa-fish"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <div class="singleCategories">
                        <span>Home Appliances  <i class="fas fa-blender"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <div class="singleCategories">
                        <span>Baby Care <i class="fas fa-baby"></i></span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>


<section class="specialOffersWrapper">
    <div class="container">
        <div class="specialOffers">
            <h2>Special Offers</h2>



            <div class="row ">

                <?php

                $selectQuery="SELECT * FROM `offers` ";
                $runQuery=mysqli_query($connect,$selectQuery);
                while($row=mysqli_fetch_assoc($runQuery)){ ?>

                    <div class="col-sm-4 d-block d-lg-flex">

                        <div class="specialOffersSingleBox">

                            <div class="card">
                                <img class="card-img-top" src="admin/product_images/<?php echo $row['product_image']?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="Disinfectant"><?php echo  $row['product_title']?></h5>
                                    <p class="card-text"><?php echo  $row['product_desc']?></p>
                                    <p>৳<?php echo  $row['product_price']?> <del>৳<?php echo  $row['orginal_price']?></del></p>
                                    <a href="offers_product_details.php?id=<?php echo base64_encode($row['id'])?>" class="btn btn-success"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>



                    </div>
                    <?php
                }
                ?>
            </div>


        </div>
    </div>
</section>

<section class="business backgroundAdded">
    <div class="container">
        <div class="businessIcon"><i class="fas fa-briefcase"></i></div>
        <div class="businessText">
                <p>Do you own a business?</p>
                <span>Become a Corporate Customer</span><br/><br/>
        </div>
        <div class="row">
            <div class="col-sm-4 icon icon1">
                <i class="far fa-money-bill-alt"></i>
                <p>Special Corporate Prices</p>
            </div>
            <div class="col-sm-4 icon icon2">
                <i class="fas fa-headset"></i>
                <p>24 Hour Support</p>
            </div>
            <div class="col-sm-4 icon icon3">
                <i class="fas fa-truck"></i>
                <p>Flexible Delivery</p>
            </div>
        </div>
    </div>
</section>
<?php require_once('includes/footer.php')?>