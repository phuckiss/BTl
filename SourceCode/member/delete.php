<?php
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    delete_admin($_POST['username']);
    $_SESSION['delete'] = 'Delete Succesfully';
    redirect_to('Index.php');
} else { 
    if(!isset($_GET['username'])) {
        redirect_to('Index.php');
    }
    $username = $_GET['username'];
    $admin = find_admin_by_id($username);
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete admin</title>
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
                    <a href="../member/index.php" class="nav-item nav-link active">Member</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="../category/category.php">Category</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="../product/product.php">Product</a>
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
            <h1 class="tittle">Delete Account</h1>
            <h3>Are you sure you want to delete this Acount ?</h3>
            <ul>
                <li><span class="label">Username: </span><?php echo $admin['username']; ?></li>
                <!-- <li><span class="label">Password: </span><?php echo $admin['password']; ?></li> -->
                <li><span class="label">Fullname: </span><?php echo $admin['fullname']; ?></li>
                <li><span class="label">Email: </span><?php echo $admin['email']; ?></li>
                <li><span class="label">Phone: </span><?php echo $admin['phone']; ?></li>
            </ul>

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <input type="hidden" name="username" value="<?php echo $admin['username']; ?>" >

                <div class="delete_ad">
                    <a href="Index.php" class="btn btn-info">Back to admin</a>
                    <input type="submit" name="submit" value="Delete Account" class="btn btn-danger"> <br><br>
                </div>

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