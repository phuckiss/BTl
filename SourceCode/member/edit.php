<?php
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');

$errors = [];

function isFormValidated(){
    global $errors;
    return count($errors) == 0;
}

function checkForm(){
    global $errors;
    if (empty($_POST['username'])){
        $errors[] = 'Username is required';
    }

    if (empty($_POST['password'])){
        $errors[] = 'Password is required';
    }  
    
    if (empty($_POST['fullname'])){
        $errors[] = 'Fullname is required';
    }
    if (empty($_POST['email'])){
        $errors[] = 'Email is required';
    }
    if (empty($_POST['phone'])){
        $errors[] = 'Phone is required';
    }
    if (empty($_POST['new_password'])){
        $errors[] = 'New Password is required';
    }
    if (empty($_POST['confirm_password'])){
        $errors[] = 'Confirm Password is required';
    }
    if ($_POST['confirm_password'] != $_POST['new_password']){
        $errors[] = 'Confirm Password and New Password dissimilarity';
    }
    if(strlen($_POST['fullname']) > 50){
        $errors[] = 'Fullname cannot exceed 50 characters ';
    }
    if(is_numeric($_POST['fullname']) == true){
        $errors[] = 'Fullname cannot contain numbers ';        
    }
}

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    checkForm();
    if (isFormValidated()){

        // $admin_set = find_ADMIN_by_USE();
        // $ADMIN = mysqli_fetch_assoc($admin_set);

        $username = $_POST['username'];
        $password = $_POST['password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        
        $admin = [];
        // $admin['USE'] = $ADMIN['username'];
        $admin['username'] = $_POST['username'];
        $admin['password'] = sha1($_POST['password']);
        $admin['fullname'] = $_POST['fullname'];
        $admin['email'] = $_POST['email'];
        $admin['phone'] = $_POST['phone'];
        $ppp = find_admin_by_id($username);

        if($_POST['password'] === $ppp['pass']){
            change_Password($new_password, $username);
            Update_admin($admin);    
            $_SESSION['update'] = 'Update Successfully';   
            redirect_to('Index.php');   
        } else{
            $errors[] = 'Old password is incorrect';
        }

             
    }
} else { // form loaded
    if(!isset($_GET['username'])) {
        redirect_to('Index.php');
    }
    $username = $_GET['username'];
    $_SESSION['edit'] = $username;
    $admin = find_admin_by_id($username);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit admin</title>
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
                <div class="errors">
                    <span> Please fix the following ERRORS ! </span>
                    <ul>
                        <?php
                        foreach ($errors as $key => $value){
                            if (!empty($value)){
                                echo '<li>', $value, '</li>';
                            }
                        }
                        ?>
                    </ul>
                </div><br><br>
            <?php endif; ?>
            
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="box">
                    <h1 class="tittle">Edit Account</h1>
                    <label for="username">UserName</label>
                    <input type="text" class="form-control" readonly id="username" name="username" value="<?php echo isFormValidated()? $admin['username']: $_POST['username'] ?>">
                    <br><br>

                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo IsFormValidated() ? '' : $_POST['password']; ?>">
                    <br><br>

                    <label for="">New Password</label>
                    <input id="new" name="new_password" type="password" class="form-control" onkeyup='check();' value="<?php echo IsFormValidated() ? '' : $_POST['new_password']; ?>">
                    <br><br>

                    <label for="">Confirm Password</label>
                    <div>
                        <input id="confirm" name="confirm_password" type="password" class="form-control" onkeyup='check();' value="<?php echo IsFormValidated() ? '' : $_POST['confirm_password']; ?>">
                        <span id="message"></span>
                    </div><br><br>

                    <label for="fullname">Fullname</label>
                    <input type="text" class="form-control" id="fullname" name="fullname"  
                    value="<?php echo isFormValidated()? $admin['fullname']: $_POST['fullname'] ?>">
                    <br><br>

                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"  
                    value="<?php echo isFormValidated()? $admin['email']: $_POST['email'] ?>">
                    <br><br>


                    <label for="phone">Phone</label> <!--required-->
                    <input type="text" class="form-control" id="phone" name="phone"  
                    value="<?php echo isFormValidated()? $admin['phone']: $_POST['phone'] ?>">
                    <br><br>
                    
                    <div class="button-form">
                        <input type="submit" value="submit" name="submit" class="btn btn-success">
                        <input type="reset" name="reset" value="Reset" class="btn btn-warning">
                    </div> <br> 
                </div>
            </form>
            <a class="btn btn-info" href="index.php">Back To Admin </a> 
        </div>
    </div>
    
    <br><br>
    <script type="text/javascript">
      var check = function() {
        if (document.getElementById('new').value ==
          document.getElementById('confirm').value) {
          document.getElementById('message').style.color = 'blue';
          document.getElementById('message').innerHTML = '';
          document.getElementById('confirm').style.border = '1px solid #ceced2';
        } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'not Invalid';
          document.getElementById('confirm').style.border = '1px solid red';
        }
      }

      function matchpass() {
        var firstpassword = document.register.new.value;
        var secondpassword = document.register.confirm.value;

        if (firstpassword == secondpassword) {
          document.getElementById('message').style.color = 'blue';
          document.getElementById('message').innerHTML = 'Invalid';
          return true;
        } else {
          document.getElementById('confirm').style.border = '1px solid red';
          return false;
        }
      }
    </script> 
    <script src="../bs4/js/jquery-3.3.1.min.js"></script>            
    <script src="../bs4/js/bootstrap.min.js"></script>  
</body>
</html>


<?php
db_disconnect($db);
?>