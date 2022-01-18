<?php
session_start();
require_once("config.php");
if(!isset($_COOKIE["currentAdmin"])){
    header("location:login.php");
}
require_once('includes/top.php');

?>
<!--custom css -->
<Link rel="stylesheet" href="css/add_product.css">

<title>Rs-X</title>
</head>
<body>

<?php
require_once('includes/nav.php');
?>

<a href="../index.php"><i class="fas fa-home"></i> HOME</a>
<a href="#"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a>
<a class="text-primary" href="add_product.php"><i class="far fa-plus-square"></i> ADD PRODUCT</a>
<a href="logout%20core.php"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
<a href="#" class='closebtn' onclick="closefunction()">&times;</a>

</div>

    <section class="addProductWrapper">
        <div class="addProductHeader container">
            <div class="alert alert-primary" role="alert">
                Import Product
            </div>
        </div>
        <div class="singleAddProductWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="singleAddProduct">
                            <div class="popUpMsz text-center">
                                <?php
                                if(isset($_REQUEST["electronicsRight"])){
                                    echo "<div class='alert alert-success' role='alert'>Add Product Successfully</div>";
                                }
                                ?>
                            </div>
                            <h2>Add Product</h2>
                            <form action="add_product%20core.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="product_category">Product Category Name</label>
                                    <select class="form-control" name="product_category" required>
                                        <option value="electronics">Electronics</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="product_title">Product Title</label>
                                    <input type="text" class="form-control" id="product_title" placeholder="Enter Product Title" name="product_title" required/>
                                </div>
                                <div class="form-group">
                                    <label for="product_desc">Product Description</label>
                                    <input type="text" class="form-control" id="product_desc" placeholder="Enter Product Description" name="product_desc" required/>
                                </div>
                                <div class="form-group">
                                    <label for="product_price">Product Price</label>
                                    <input type="text" class="form-control" id="product_price" placeholder="Enter Product Price" name="product_price" required/>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Product Image</label>
                                    <input type="file" class="form-control" id="photo" placeholder="Enter Product photo" name="photo" required />
                                </div>
                                <button type="submit" class="btn btn-primary" value="submit" name="add_product">Add Product</button>
                            </form>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="singleAddProduct">
                            <div class="popUpMsz text-center">
                                <?php
                                if(isset($_REQUEST["offersRight"])){
                                    echo "<div class='alert alert-success' role='alert'>Add Product Successfully</div>";
                                }
                                ?>
                            </div>
                            <h2>Add Offers</h2>
                            <form action="add_offers%20core.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="product_title">Product Title</label>
                                    <input type="text" class="form-control" id="product_title" placeholder="Enter Product Title" name="product_title" required/>
                                </div>
                                <div class="form-group">
                                    <label for="product_category">Product Category</label>
                                    <select class="form-control" name="product_category" required>
                                        <option value="">Select Category</option>
                                        <option value="offers">Offers</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="product_desc">Product Description</label>
                                    <input type="text" class="form-control" id="product_desc" placeholder="Enter Product Description" name="product_desc" required/>
                                </div>
                                <div class="form-group">
                                    <label for="product_price">Orginal Price</label>
                                    <input type="text" class="form-control" id="product_price" placeholder="Enter Product Price" name="orginal_price" required/>
                                </div>
                                <div class="form-group">
                                    <label for="product_price">Offers Price</label>
                                    <input type="text" class="form-control" id="product_price" placeholder="Enter Product Price" name="offers_price" required/>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Product Image</label>
                                    <input type="file" class="form-control" id="photo" placeholder="Enter Product photo" name="photo" required />
                                </div>
                                <button type="submit" class="btn btn-primary" value="submit" name="add_product">Add Offers</button>
                            </form>

                        </div>
                    </div>
                    <div class="col-sm-4">

                    </div>
                </div>
            </div>
        </div>
    </section>





<?php require_once('includes/footer.php')?>