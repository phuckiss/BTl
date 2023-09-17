<?php
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    delete_product($_POST['productID']);
    $_SESSION['delete'] = 'Delete Successfully';
    redirect_to('product.php');
} else { // form loaded
    if(!isset($_GET['productID'])) {
        redirect_to('product.php');
    }
    $id = $_GET['productID'];
    $product = find_product_by_id($id);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Product</title>
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
        <div class="form_category">
            <h1 class="tittle">Delete Product</h1>
            <div class="con">
                <h4>Are you sure you want to delete this product?</h4>
                <p class="name-delete">Name: <?php echo $product['name']; ?></p>
            </div>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>" >
                <input type="hidden" name="categoryID" value="<?php echo $product['categoryID']; ?>" > <br>  
                <div class="btn_delete">
                    <input type="submit" name="submit" value="Delete Product" class="btn btn-danger"> 
                </div> <br> 
                <!-- <a class="btn btn-info" href="<?php echo 'show.php?categoryID=' . $product['categoryID']; ?>" >Product List</a> -->
                <a class="btn btn-info" href="product.php" >Back To Product List</a>
            </form>      
        </div>  
    </div>
        <script src="../bs4/js/jquery-3.3.1.min.js"></script>            
    <script src="../bs4/js/bootstrap.min.js"></script> 
</body>
</html>

<?php
db_disconnect($db);
?>