<?php 
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');
$errors = [];

function isFormValidated(){
    global $errors;
    return count($errors) == 0;
}


if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST['username'];
    if (empty($username)){
        $errors[] = 'Username is required';
    } elseif (strlen($username) < 6){
        $errors[] = 'Username must be at least 6 characters';
    }
    if(strlen($_POST['fullname']) > 50){
        $errors[] = 'Fullname cannot exceed 50 characters ';
    }
    if(is_numeric($_POST['fullname']) == 1){
        $errors[] = 'Fullname cannot contain numbers ';         
    }
    if (empty($_POST['password'])){
        $errors[] = 'Password is required';
    } elseif (strlen($_POST['password']) < 6){
        $errors[] = 'Password Username must be at least 6 characters';
    }

    if (empty($_POST['fullname'])){
        $errors[] = 'Fullname is required';
    }
    if (empty($_POST['email'])){
        $errors[] = 'Email is required';
    }
    
    if (empty($_POST['phone'])){
        $errors[] = 'Phone is required';
    }else{
        if(!empty($_POST['phone'])&& !is_numeric($_POST['phone']) == 1){
            $errors[] = "Phone must be number!";
        }else{
            if(!empty($_POST['phone'])&& count((str_split($_POST['phone'])))!=10){
                $errors[] = 'Phone must have 10 number!';
            }
        }
    }
    $username = $_POST['username'];
    $u = "SELECT username FROM admin WHERE username='$username' ";
    $uu = mysqli_query($db, $u);
    $re = mysqli_num_rows($uu);

    if($re > 0){
        $errors[] = 'Username available';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration </title>
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
            <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && !isFormValidated()): ?> 
                <div class="errors" style="color:#FF9933">
                    <span> Please fix the following errors </span>
                    <ul>
                        <?php
                        foreach ($errors as $key => $value){
                            if (!empty($value)){
                                echo '<li>', $value, '</li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            <?php endif; ?>  

            <form action="<?php  echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="box">
                    <h1 class="tittle">Registration Account</h1>
                    <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && isFormValidated()): ?> 
                        <div class="errors" style="color:#FF9933">
                            <h5 style="text-align:center;color: #33FF33;">Account successfully created</h5>
                        </div>
                    <?php endif; ?>
                    <label for="">UserName</label>
                    <input type="text" class="form-control" name="username" value="<?php echo isFormValidated()? '': $_POST['username'] ?>">

                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo isFormValidated()? '': $_POST['password'] ?>">

                    <label for="">FullName</label>
                    <input type="text" class="form-control" name="fullname" value="<?php echo isFormValidated()? '': $_POST['fullname'] ?>">

                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo isFormValidated()? '': $_POST['email'] ?>">
                    
                    <label for="">Phone</label>
                    <input type="number" class="form-control" name="phone" value="<?php echo isFormValidated()? '': $_POST['phone'] ?>" > <br>

                    <div class="button-form">
                        <input type="submit" value="Submit" name="submit" class="btn btn-success">
                        <input type="reset" name="reset" value="Reset" class="btn btn-warning">
                    </div> <br> 
                </div>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && isFormValidated()): ?> 
                <div class="error" style="#fff;">
                    <?php 
                        $admin = [];
                        $admin['username'] = $_POST['username'];
                        $admin['password'] = sha1($_POST['password']);
                        $admin['fullname'] = $_POST['fullname'];
                        $admin['email'] = $_POST['email'];
                        $admin['phone'] = $_POST['phone'];
                        $admin['pass'] = $_POST['password'];
                        $result = insert_admin($admin);
                        $newadminID = mysqli_insert_id($db);
                    ?>
                </div>
            <?php endif; ?> 

            <a href="index.php" class="btn btn-info">Back to Index</a> <br><br>
        </div>
    </div>
    <script src="../bs4/js/jquery-3.3.1.min.js"></script>            
    <script src="../bs4/js/bootstrap.min.js"></script>  
</body>
</html>
<?php 
db_disconnect($db);
?>