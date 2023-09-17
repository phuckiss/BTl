<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "project");

    function db_connect(){
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        return $connection;
    }

    $db = db_connect();

    function db_disconnect(){
        if(isset($connection)){
            mysqli_close($connection);
        }
        return;
    }
    
    $sql = "SELECT *
    FROM category AS c
    JOIN product AS p ON c.CategoryID = p.CategoryID ";
    $join = mysqli_query(db_connect(), $sql);

    $sqll = "SELECT *
    FROM product AS p
    JOIN category AS c ON p.CategoryID = c.CategoryID ";
    $joinn = mysqli_query(db_connect(), $sqll);

    function confirm_query_result($result){
        global $db;
        if (!$result){
            echo mysqli_error($db);
            db_disconnect($db);
            exit; 
        } else {
            return $result;
        }
    }

    function insert_category($category){
        global $db;

        $sql = "INSERT INTO category ";
        $sql .= "(`name`)";
        $sql .= "VALUES (";
        $sql .= "'" . $category['name'] . "'";
        $sql .= ")";

        $result =  mysqli_query($db, $sql);

        if($result) {
            return true;
        } else {
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }

    function find_all_category(){
        global $db;

        $sql = "SELECT * FROM `category` ";
        $sql .= "ORDER BY `name`";

        $result = mysqli_query($db, $sql);
        return $result;
    }

    function find_category_by_id($id) {
        global $db;
    
        $sql = "SELECT * FROM category ";
        $sql .= "WHERE categoryID='" . $id . "'";
        $result = mysqli_query($db, $sql);
        confirm_query_result($result);
        $category = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $category; 
    }

    function update_category($category) {
        global $db;
    
        $sql = "UPDATE category SET ";
        $sql .= "name='" . $category['name'] . "' ";
        $sql .= "WHERE categoryID='" . $category['categoryID'] . "' ";
        $sql .= "LIMIT 1";
    
        $result = mysqli_query($db, $sql);
        return confirm_query_result($result);
    }

    function delete_category($id) {
        global $db;
    
        $sql = "DELETE FROM category ";
        $sql .= "WHERE categoryID='" . $id . "' ";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);
    
        return confirm_query_result($result);
    }
//========================================================
    function insert_product($product){
        global $db;

        $sql = "INSERT INTO product ";
        $sql .= "(categoryID, `name`, price, detail, picture) ";
        $sql .= "VALUES (";
        $sql .= "'" . $product['categoryID'] . "', ";
        $sql .= "'" . $product['name'] . "', ";
        $sql .= "'" . $product['price'] . "', ";
        $sql .= "'" . $product['detail'] . "', ";
        $sql .= "'" . $product['picture'] . "'";
        $sql .= ")";

        $result =  mysqli_query($db, $sql);

        if($result) {
            return true;
        } else {
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }

    function find_all_product(){
        global $db;

        $sql = "SELECT * FROM `product` ";
        $sql .= "ORDER BY `name`";

        $result = mysqli_query($db, $sql);
        return $result;
    }

    function find_product_by_id($id) {
        global $db;
    
        $sql = "SELECT * FROM product ";
        $sql .= "WHERE productID='" . $id . "'";
        $result = mysqli_query($db, $sql);
        confirm_query_result($result);
        $product = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $product; 
    }

    function find_product_by_catid($id) {
        global $db;
    
        $sql = "SELECT * FROM product ";
        $sql .= "WHERE categoryID='" . $id . "'";
        $result = mysqli_query($db, $sql);
        confirm_query_result($result);
        $product = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $product; 
    }


    function update_product($product) {
        global $db;
    
        $sql = "UPDATE product SET ";
        $sql .= "name='" . $product['name'] . "', ";
        $sql .= "categoryID='" . $product['categoryID'] . "', ";
        $sql .= "detail='" . $product['detail'] . "', ";
        $sql .= "price='" . $product['price'] . "', ";
        $sql .= "picture='" . $product['picture'] . "' ";
        $sql .= "WHERE productID='" . $product['productID'] . "' ";
        $sql .= "LIMIT 1";
    
        $result = mysqli_query($db, $sql);
        return confirm_query_result($result);
    }

    function delete_product($id) {
        global $db;
    
        $sql = "DELETE FROM product ";
        $sql .= "WHERE productID='" . $id . "' ";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);
    
        return confirm_query_result($result);
    }
    function delete_all_product($id) {
        global $db;
    
        $sql = "DELETE FROM product ";
        $sql .= "WHERE categoryID='" . $id . "';";
        $result = mysqli_query($db, $sql);
    
        return confirm_query_result($result);
    } 

// =====================================================================admin
    function insert_admin($admin){
        global $db;

        $sql = "INSERT INTO admin ";
        $sql .= "(Username,Password,Fullname,Email,Phone) ";
        $sql .= "VALUES (";
        $sql .= "'" . $admin['username'] . "',"; 
        $sql .= "'" . $admin['password'] . "',";
        $sql .= "'" . $admin['fullname'] . "',";
        $sql .= "'" . $admin['email'] . "',";
        $sql .= "'" . $admin['phone'] . "'";
        $sql .= ");";

        $result = mysqli_query($db, $sql);
        if($result) {
            return true;
        } else {
            echo "USERNAME already!";
            db_disconnect($db);
            exit;
        }
        return confirm_query_result($result);
    }

    function find_usenmae($username) {
        global $db;
        $sql = "SELECT password FROM admin ";
        $sql .= "WHERE username='" . $username . "'";
        $result = mysqli_query($db, $sql);
        confirm_query_result($result);
        $Login = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $Login; 
    }

    function find_all_admin(){
        global $db;

        $sql = "SELECT * FROM admin ";
        $result = mysqli_query($db, $sql);

        return $result;
    }

    function find_all_admin_different(){
        global $db;

        $sql = "SELECT * FROM admin ";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result)){
            
            return true;
        } else {
            return false;
        }
    }

    function find_admin_by_id($username){
        global $db;

        $sql = "SELECT * FROM admin ";
        $sql .= "WHERE username = '" . $username . "' ";
        $result = mysqli_query($db, $sql);
        confirm_query_result($result);
        $admin = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $admin;
    }

    function update_admin($admin){
        global $db;

        $sql  = "UPDATE admin SET ";
        $sql .= "username = '" . $admin['username'] . "', ";
        $sql .= "password = '" . $admin['password'] . "', ";
        $sql .= "fullname = '" . $admin['fullname'] . "', ";
        $sql .= "email = '" . $admin['email'] . "', ";
        $sql .= "phone = '" . $admin['phone'] . "' ";
        $sql .= "WHERE username = '" . $admin['USE'] . "' ";
        $sql .= "LIMIT 1;";

        $result = mysqli_query($db, $sql);

        return confirm_query_result($result);
    }

    function delete_admin($username){
        global $db;

        $sql = "DELETE FROM admin ";
        $sql .= "WHERE username='" . $username . "' ";
        $sql .= "LIMIT 1;";
        $result = mysqli_query($db, $sql);

        return confirm_query_result($result);
    }

    function find_ADMIN_by_USE() {
        global $db;
        $sql = "SELECT username FROM admin ";
        $sql .= "ORDER BY username";
        $result = mysqli_query($db,$sql);
        return $result;
    }
?>
 