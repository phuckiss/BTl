<?php
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Admin</title>
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
                    <h3 > <i class="fa fa-user-circle-o"> </i> <?php echo isset($_SESSION['username'])?$_SESSION['username']:  redirect_to('../login/login.php'); ?></h3>
                </li>
                <li class="nav-item">
                    <a href=<?php  echo '../login/login.php'; ?> class="nav-item nav-link" class="fa fa-sign-out"> <i class="fa fa-sign-out"></i> Logout </a>
                </li>
            </ul>
        </div>
    </nav>
    <?php include('../database+function/successfully.php'); ?> 
    <br>
    <h1 class="tittle">MEMBER</h1>
    <div class="table-container">
        <div class="ttbox">
            <a class="" href="new.php"><i class="fa fa-plus-square"></i></a>
            <div class="ttht">
                <h5>Existing member: <?php count_admin();?></h5> 
            </div>
        </div>  
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>


            <tbody>
                <?php
                    $admin_set = find_all_admin();
                    $count = mysqli_num_rows($admin_set);
                    for($i = 0; $i < $count; $i++):
                        $admin = mysqli_fetch_assoc($admin_set);
                ?>
                <tr class="table-link">
                    <td data-label="User Name"><?php echo $admin['username'];?></td>
                    <td data-label="Password" class="password_index"><?php echo $admin['password'];?></td>
                    <td data-label="Full Name"><?php echo $admin['fullname'];?></td>
                    <td data-label="Phone"><?php echo $admin['phone'];?></td>
                    <td data-label="Email"><?php echo $admin['email'];?></td>
                    <td data-label="Edit"><a href="<?php echo 'edit.php?username='.$admin['username']; ?>" class="fa fa-pencil-square-o"></a></td>
                    <td data-label="Delete"><a href="<?php echo 'delete.php?username='.$admin['username']; ?>" class="fa fa-trash"></a></td>
                </tr>
                <?php
                    endfor;
                    mysqli_free_result($admin_set);
                ?>
            </tbody>
        </table>
    </div>

    <script src="../bs4/js/jquery-3.3.1.min.js"></script>            
    <script src="../bs4/js/bootstrap.min.js"></script>  
</body>
</html>

<?php
    db_disconnect($db);
?>