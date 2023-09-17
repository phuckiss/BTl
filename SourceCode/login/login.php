<?php 
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');
    $errors=[];
    
    if ($_SERVER["REQUEST_METHOD"] == 'POST'){
        if (empty($_POST['username'])){
            $errors[] = 'Username is required';
        } elseif (strlen($_POST['username']) < 6){
            $errors[] = 'Username must be at least 6 characters';
        }

        if (empty($_POST['password'])){
            $errors[] = 'Password is required';
        } elseif (strlen($_POST['password']) < 6){
            $errors[] = 'Password Username must be at least 6 characters';
        }
        $username = $_POST['username'];
        $login = find_usenmae($username);
        if($login['pass'] === $_POST['password']){
            $_SESSION['username'] = $username;
            redirect_to('../member/index.php');
        }else{
            $errors[] = "Username or Password is incorrect ";
        }
    }
    function isFormValidated(){
        global $errors;
        return count($errors) == 0;
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
                
                    
                <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" class="form_login">
                    <div class="form-row">
                        <div class="col-lg-12">
                            <h1 class="tittle">Login</h1>
                            <h4 class="tittle-nobold">Sign into your account</h4>
                            <div style="color:#FF9933; ">
                                <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && !isFormValidated()): ?> 
                                    <div style="color:#FF9933;">
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
                            </div>
                            <label for="username">Username</label>
                            <input type="text" name="username" value="<?php echo isFormValidated()? '': $_POST['username']?>" class="form-control my-1 p-2 " placeholder="Enter UserName">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                        <label for="password">Password</label>
                            <input type="password" name="password" class="form-control my-1 p-2" placeholder="******" value="<?php echo isFormValidated()? '': $_POST['password']?>">  
                        </div>
                    </div>
                    <a href="registration.php">Create New Account</a>
                    <div class="form-row">
                        <div class="col-lg-12 ">
                            <input type="submit" value="Login" class="btn1 mt-3 mb-5"> 
                        </div>
                    </div>
                </form>
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
