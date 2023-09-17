<?php
require_once('../category/database.php');
require_once('../admin/initialize.php');

$errors = [];

function isFormValidated(){
    global $errors;
    return count($errors) == 0;
}

$res = $_GET['categoryID'];
$category = find_category_by_id($res);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Product List</title>
    <link rel="stylesheet" href="../bs4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bs4/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bs4/css/custom.css">
</head>
<body>
    <?php require_once('../admin/user1.php'); ?>
    <?php include('../admin/successfully.php'); ?>
    <div class="container">
    <br>
        <a class="btn btn-info" href="../category.php">Back to List</a>
    </div>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <input type="hidden" name="categoryID" value="<?php echo isFormValidated()? $category['categoryID']: $_POST['categoryID'] ?> ?>" >   
    </form>
    <div>
        <h1 class="tittle">Category: <?php echo isFormValidated() ? $category['name'] : $_POST['name']?></h1>
    </div>   
    <h2 class="tittle">Product List</h2>
    <div class="table-container">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Detail</th>
                        <th>Picture</th>
                        <th>View</th>
                    </tr>
                </thead>
                <?php
                    if(mysqli_num_rows($join) > 0){
                        while($row = mysqli_fetch_array($join)){
                ?>
                <?php if($row['categoryID'] == $category['categoryID']): ?>
                    <tbody>
                        <tr class="table-link">
                            <td data-label="Name" class="show_detail"><?php echo $row['name']; ?></td>
                            <td data-label="Price" class="show_detail"><?php echo $row['price']; ?> VND</td>
                            <td data-label="Detail" class="show_detail"><?php echo $row['detail']; ?></span></td>
                            <td data-label="Picture"><img class="img-rounded" id="img_show" width="128px" height="100px" src="<?php echo '../img/product/' . $row['picture']; ?>"></td>
                            <td data-label="View"><a href="<?php echo 'view.php?productID='. $row['productID']; ?>" class="fa fa-th-list"></a></td>
                        </tr>
                    </tbody>
                <?php endif; ?>
                <?php
                        }   
                    }
                ?>
            </table>
        </div>
    </div>
    <script src="../bs4/js/jquery-3.3.1.min.js"></script>            
    <script src="../bs4/js/bootstrap.min.js"></script>  
</body>
</html>

<?php
db_disconnect($db);
?>