<?php
require_once('../category/database.php');
require_once('../admin/initialize.php');

$errors = [];

function isFormValidated(){
    global $errors;
    return count($errors) == 0;
}

$res = $_GET['productID'];
$product = find_product_by_id($res);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Delete product</title>
    <link rel="stylesheet" href="../bs4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bs4/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bs4/css/custom.css">
</head>
<body>
    <?php require_once('../admin/user1.php'); ?>
    <div class="container">
        <div class="form_product">
            <h1 class="tittle">Product</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                <input type="hidden" name="productID" value="<?php echo isFormValidated()? $product['productID']: $_POST['productID'] ?> ?>" >   
            </form>
            <a class="btn btn-info" href="<?php echo 'show.php?categoryID=' . $product['categoryID']; ?>" >Back to View</a>
            <?php include('../admin/successfully.php'); ?>   <br> <br> <br>
            <div class="menu-name">
                <div class="row">
                    <div class="col-md-7" id="menu-product">
                        <div><span>Name:</span> <?php echo isFormValidated() ? $product['name'] : $_POST['name']?></div>
                        <div><span>Price:</span>  <?php echo isFormValidated() ? $product['price'] : $_POST['price']?> VND</div>
                        <div><h3>Detail</h3> <br> <?php echo isFormValidated() ? $product['detail'] : $_POST['detail']?></div>
                    </div>
                    <div class="col-md-4 col-md-offset-1"><img class="img-rounded" width="300" height="250" src="<?php echo '../img/product/' . $product['picture']; ?>"></div> 
                </div>
            </div>
        </div>
    </div>  
    <script src="../bs4/js/jquery-3.3.1.min.js"></script>            
    <script src="../bs4/js/bootstrap.min.js"></script> 
</body>
</html>

<?php
db_disconnect($db);
?>