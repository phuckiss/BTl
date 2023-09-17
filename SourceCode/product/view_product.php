<?php
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete product</title>
    <link rel="stylesheet" href="../bs4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bs4/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bs4/css/custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="../member/index.php"><img width="100" height="70" src="../img/logo_brand/logo1.png" class="navbar-brand"></a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarUser1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarUser1">
            <ul class="navbar-nav font_li_nav">
                <li>
                    <a href="../member/index.php" class="nav-item nav-link">Member</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="../category/category.php">Category</a>
                </li>
                <li>
                    <a class="nav-item nav-link active" href="../product/product.php">Product</a>
                </li>
                <hr>
            </ul>   
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h3 > <i class="fa fa-user-circle-o"> </i> <?php echo isset($_SESSION['username'])?$_SESSION['username']: redirect_to('../login/login.php'); ?></h3>
                </li>
                <li class="nav-item">
                    <a href=<?php echo '../login/login.php'; ?> class="nav-item nav-link" class="fa fa-sign-out"> <i class="fa fa-sign-out"></i> Logout </a>
                </li>
            </ul>
        </div>
    </nav> 
    <div class="container">
        <div class="form_product">
            <h1 class="tittle">Product</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                <input type="hidden" name="productID" value="<?php echo isFormValidated()? $product['productID']: $_POST['productID'] ?> ?>" >   
            </form>
            <a class="btn btn-info" href="product.php" >Back to Product List</a> <br><br>
            <div class="menu-name">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12" id="menu-product">
                        <div><span>Name:</span> <?php echo isFormValidated() ? $product['name'] : $_POST['name']?></div>
                        <div><span>Price:</span>$ <?php echo isFormValidated() ? $product['price'] : $_POST['price']?></div>
                        <hr>
                        <div><h3>Detail</h3> <br> <?php echo isFormValidated() ? $product['detail'] : $_POST['detail']?></div>
                    </div>
                <img class="img-rounded col-md-4 col-sm-12 col-xs-12" width="100%" height="100%" src="<?php echo '../img/product/' . $product['picture']; ?>" id="img-view">
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