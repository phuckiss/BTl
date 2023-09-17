<?php 
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');
    $errors = [];


    function isFormValidated(){
        global $errors;
        return count($errors) == 0;
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name'])){
            $errors[] = '\'Name\' cannot be left blank ';
        }
        if(strlen($_POST['name']) > 50){
            $errors[] = '\'Name\' cannot exceed 50 characters ';
        }
        $name = $_POST['name'];
        $u = "SELECT name FROM category WHERE name='$name' ";
        $uu = mysqli_query($db, $u);
        $re = mysqli_num_rows($uu);
    
        if($re > 0){
            $errors[] = 'Category available';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                    <a class="nav-item nav-link active" href="../category/category.php">Category</a>
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
            <h1 class="tittle">ADD CATEGORY</h1>
            <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && isFormValidated()):?> 
                <div class="alert alert-success">
                    Create Successfully !
                </div>
            <?php endif; ?>
            <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && !isFormValidated()): ?>
                <div class="errors" style="color:#FF9933">
                    <span>Please FIX the following ERRORS !</span>
                    <ul>
                        <?php 
                            foreach($errors as $key => $value){
                                if(!empty($value)){
                                    echo '<li>', $value, '</li>';
                                }
                            }
                        ?> 
                    </ul>
                </div>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo isFormValidated() ? '' : $_POST['name']; ?>" class="form-control">
                    </div>
                    <div class="button-form">
                        <input type="submit" value="Submit" name="submit" class="btn btn-success">
                        <input type="reset" name="reset" value="Reset" class="btn btn-warning">
                    </div>
            </form>
                <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && isFormValidated()): ?>
                    <?php 
                        $category = [];
                        $category['name'] = $_POST['name'];
                        $result = insert_category($category);
                        $newcategoryID = mysqli_insert_id($db);
                        redirect_to('category.php');
                        // redirect_to('product/product.php?categoryID=' . $newcategoryID);
                    ?>           
                <?php endif; ?>
            <br><br>
            <a class="btn btn-info" href="category.php">Back to List</a>
        </div>
    </div>
    <script src="../bs4/js/jquery-3.3.1.min.js"></script>            
    <script src="../bs4/js/bootstrap.min.js"></script> 
</body>
</html>

<?php 
    db_disconnect($db);
?>