<?php require_once('includes/top.php');
require_once('config.php');
?>
<!--custom css -->
<Link rel="stylesheet" href="css/electronics.css">

<title>Rs-X</title>
</head>
<body>

<?php
require_once('includes/nav.php');
?>

            <a href="index.php"><i class="fas fa-home"></i> HOME</a>
            <a class="text-primary" href="electronics.php"><i class="fab fa-product-hunt"></i> PRODUCTS</a>
            <a href="#"><i class="fas fa-blog"></i> BLOG</a>
            <a href="admin/dashboard.php"><i class="fas fa-users-cog"></i> ADMIN</a>
            <a href="#" class='closebtn' onclick="closefunction()">&times;</a>

    </div>

</header>


<section class="productsWrapper">
    <div class="productsHeading text-center">
        <h2>Electronics</h2>
    </div>
    <hr/>

    <div class="allProducts">
        <div class="container">
            <div class="row d-block d-lg-flex">

                <?php

                if(isset($_REQUEST['searchTerm'])){
                    $searchTerm = htmlentities(htmlspecialchars(strip_tags(addslashes(mysqli_real_escape_string($connect,$_REQUEST["searchTerm"])))));

                }

                $runQuery=mysqli_query($connect,"SELECT * FROM `products` WHERE `product_title` LIKE '%$searchTerm%'");

                if(mysqli_num_rows($runQuery)>0){

                    while($row=mysqli_fetch_assoc($runQuery)){ ?>

                        <div class="col-lg-3 col-md-4 col-sm-6 d-block d-lg-flex singleProducts">
                            <div class="card singleProductsCard">
                                <img class="card-img-top" src="admin/product_images/<?php echo $row['product_image']?>" alt="Card image cap"/>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['product_title']?></h5>
                                    <p class="card-text">৳ <?php echo $row['product_price']?></p>
                                    <a href="product_details.php?id=<?php echo base64_encode($row['product_id'])?>" class="btn btn-success"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <?php
                    }

                }else{
                    echo "There Is No Product Available";
                }

                    ?>





            </div>
        </div>
    </div>
</section>

<?php require_once('includes/footer.php')?>