<?php
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');

$errors = [];

function isFormValidated(){
    global $errors;
    return count($errors) == 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
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
    <?php include('../database+function/successfully.php'); ?>  
    <br><h1 class="tittle">PRODUCT LIST</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <input type="hidden" name="categoryID" value="<?php echo isFormValidated()? $category['categoryID']: $_POST['categoryID'] ?> ?>" >   
    </form>  
        <div class="table-container">
                <div class="ttbox">
                    <a class="" href="new_product.php"><i class="fa fa-plus-square"></i></a>
                    <div class="ttht">
                        <h5>Existing product: <?php count_product();?></h5> 
                    </div>
                </div>  
            <table class="table table-striped">    
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Detail</th>
                        <th>Picture</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th> 
                    </tr>
                </thead>
                <?php
                    if(mysqli_num_rows($join) > 0){
                        while($row = mysqli_fetch_array($join)){
                ?>
                    <tbody>
                        <tr class="table-link">
                            <td data-label="Name"><?php echo $row['name']; ?></td>
                            <td data-label="Category"><?php echo $row[1]; ?></td>
                            <td data-label="Price">$ <?php echo $row['price']; ?></td>
                            <td data-label="Detail" class="show_detail"><?php echo $row['detail']; ?></span></td>
                            <td data-label="Picture"><img class="img-rounded" id="img_show" width="128px" height="100px" src="<?php echo '../img/product/' . $row['picture']; ?>"></td>
                            <td data-label="View"><a href="<?php echo 'view_product.php?productID='. $row['productID']; ?>" class="fa fa-th-list"></a></td>
                            <td data-label="Edit"><a href="<?php echo 'edit.php?productID='. $row['productID']; ?>" class="fa fa-pencil-square-o"></a></td>
                            <td data-label="Delete"><a href="<?php echo 'delete.php?productID='. $row['productID']; ?>" class="fa fa-trash"></a></td>
                        </tr>
                    </tbody>
                <?php
                        }   
                    }
                ?>
            </table>
        </div>
    <script src="../bs4/js/jquery-3.3.1.min.js"></script>            
    <script src="../bs4/js/bootstrap.min.js"></script>    
</body>
</html>

<?php
db_disconnect($db);
?>