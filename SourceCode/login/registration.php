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
    }
    unset($_SESSION['username']); 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bs4/css/bootstrap.min.css">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../bs4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bs4/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bs4/css/custom.css">
  </head>
  <body class="body_login">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-2 col-xs-2"></div>
            <div class="col-md-6 col-sm-8 col-xs-8">
                <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" class="form_login" style="margin-top:3vh">
                    <div class="form-row">
                        <div class="col-lg-12">
                        <h1 class="tittle">Registration</h1>
                        <h4 class="tittle-nobold">Create your account</h4>
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
                        <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && isFormValidated()): ?> 
                            <div class="errors" style="color:#FF9933">
                                <?php 
                                    $username = $_POST['username'];
                                    $u = "SELECT username FROM admin WHERE username='$username' ";
                                    $uu = mysqli_query($db, $u);
                                    $re = mysqli_num_rows($uu);

                                    if($re > 0){
                                        echo '<li>' . 'Username available' . '</li>';
                                    } else{
                                    ?>
                                    <h5 style="text-align:center;color: #33FF33;">Account successfully created</h5>
                                <?php
                                    }
                                ?>
                            </div>
                        <?php endif; ?>
                            <label for="username">Username</label>
                            <input type="text" name="username" value="<?php echo isFormValidated()? '': $_POST['username']?>" class="form-control my-1 p-2 " placeholder="UserName">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                        <label for="password">Password</label>
                            <input type="password" name="password" class="form-control my-1 p-2" placeholder="******" value="<?php echo isFormValidated()? '': $_POST['password'] ?>">  
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <label for="">FullName</label>
                            <input type="text" class="form-control my-1 p-2" name="fullname" value="<?php echo isFormValidated()? '': $_POST['fullname'] ?>" class="form-control my-1 p-2" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control my-1 p-2" value="<?php echo isFormValidated()? '': $_POST['email'] ?>" class="form-control my-1 p-2" placeholder="Abc123@gmail.com">  
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <label for="">Phone</label>
                            <input type="text" class="form-control my-1 p-2" name="phone" value="<?php echo isFormValidated()? '': $_POST['phone'] ?>" class="form-control my-1 p-2" placeholder="0123456789">
                        </div>
                    </div>
                    <a href="login.php">Login Now</a>
                    <div class="form-row">
                        <div class="col-lg-12 ">
                            <input type="submit" value="Register" class="btn1 mt-3 mb-5"> 
                        </div>
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
                <div class="col-md-3 col-sm-2 col-xs-2"></div>
            </div>
            </div>
    <script src="../bs4/js/jquery-3.3.1.min.js"></script>            
    <script src="../bs4/js/bootstrap.min.js"></script>    
  </body>
</html>
<?php
    db_disconnect($db);
?>
