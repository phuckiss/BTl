<?php 
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');
    unset($_SESSION['username']); 
    $errors = [];

    function isFormValidated(){
        global $errors;
        return count($errors) == 0;
    }
    if(isset($_GET['categoryID'])){
        $res = $_GET['categoryID'];
        $category = find_category_by_id($res);
    }
    
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../bs4/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../bs4/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../bs4/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../bs4/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../bs4/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../bs4/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../bs4/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../bs4/css/style.css" type="text/css">
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <input type="hidden" name="categoryID" value="<?php echo isFormValidated()? $category['categoryID']: $_POST['categoryID'] ?> ?>" >   
    </form>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <nav class="humberger__menu__nav mobile-menu">
            <div class="humberger__menu__logo">
                <a href="./index.php"><img src="../img/logo_brand/logo1.png" alt=""></a>
            </div>
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="shop-grid.php">Shop</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a target="_blank" href="https://facebook.com"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
            <a target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <!-- <li><i class="fa fa-envelope"></i>shrek_juice@gmail.com</li> -->
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> shrek_juice@gmail.com</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a target="_blank" href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="../img/logo_brand/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="shop-grid.php">Shop</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Category</span>
                        </div>
                            <ul>
                                <li class="active" data-filter="*"><a href="shop-grid.php">All</a></li>
                                <?php
                                    $list = find_all_category();
                                    while($row = mysqli_fetch_assoc($list)){
                                        $new_str = str_replace(' ', '', $row['name']);
                                ?>
                                    <li><a href="<?php echo 'shop-grid.php?categoryID=' . $row['categoryID']; ?>"><?php echo $row['name']; ?></a></li>
                                <?php 
                                    }
                                ?>
                            </ul>
                    </div>
                </div>
                    <!-- search -->
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="hero__search__categories">
                                    All Categories
                                </div>
                                <input type="text" placeholder="What do yo u need?" name="search" type="text"  aria-label="Search" id="search">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                            <?php 
                                if(isset($_POST['search'])){
                                    global $db;
                                    $searchq = $_POST['search'];

                                    $query_s = mysqli_query($db, "SELECT * FROM product WHERE name LIKE '%$searchq%'");
                                    $count = mysqli_num_rows($query_s);
                                }
                            ?>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 816.457.716</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="../img/logo_brand/40480.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Sherk Juice</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        if(!isset($category['categoryID']) && !isset($_POST['search'])){
                    ?>
                        <div class="section-title">
                            <h2>All Products</h2>
                        </div>
                    <?php 
                        }
                        if(isset($category['categoryID'])){
                    ?>
                        <div class="section-title">
                            <h2><?php echo $category['name']; ?></h2>
                        </div>
                    <?php 
                        }
                        if(isset($_POST['search'])){
                    ?>
                        <div class="section-title">
                            <h2><?php echo 'Find the following products'; ?></h2>
                        </div>
                    <?php 
                        }
                    ?>
                </div>

                
            </div>
            <div class="row featured__filter">
                        <!-- search    -->
                <?php
                    if(isset($_POST['search'])){
                        if($count == 0){
                ?>
                    <h3 style="color:red;margin:0 auto;font-weight:bold;">No results were found !</h3>
                <?php
                        } else {
                            while($row = mysqli_fetch_array($query_s)){
                ?>              
                    <a class="col-lg-3 col-md-4 col-sm-6 mix" href="<?php echo 'shop-details.php?productID='. $row['productID']; ?>" >
                        <div class="item_sp">
                            <img class="img-rounded" id="img_show" width="128px" height="100px" src="<?php echo '../img/product/' . $row['picture']; ?>">
                            <h4 class="show_detail"><?php echo $row['name']; ?></h4>
                            <h2 class="show_detail">$ <?php echo $row['price']; ?></h2>
                            <br>
                        </div>
                    </a>
                <?php 
                            }
                        }
                    }                        
                ?> 
                    <!-- all product -->
                <?php
                if(!isset($_POST['search']) && !isset($category['categoryID'])){
                    if(mysqli_num_rows($join) > 0){
                        while($row = mysqli_fetch_array($join)){
                ?>
                    <a class="col-lg-3 col-md-4 col-sm-6 mix" href="<?php echo 'shop-details.php?productID='. $row['productID']; ?>" >
                        <div class="item_sp">
                            <img class="img-rounded" id="img_show" width="128px" height="100px" src="<?php echo '../img/product/' . $row['picture']; ?>">
                            <h4 class="show_detail"><?php echo $row['name']; ?></h4>
                            <h2 class="show_detail">$ <?php echo $row['price']; ?></h2>
                            <br>
                        </div>
                    </a>
                <?php
                        }   
                    }
                }    
                ?>
                <!-- menu product -->
                <?php
                    if(!isset($_POST['search']) && isset($category['categoryID'])){
                        if(mysqli_num_rows($join) > 0){
                            while($row = mysqli_fetch_array($join)){
                                if($row['categoryID'] == $category['categoryID']){
                ?>
                    <a class="col-lg-3 col-md-4 col-sm-6 mix" href="<?php echo 'shop-details.php?productID='. $row['productID']; ?>" >
                        <div class="item_sp">
                            <img class="img-rounded" id="img_show" width="128px" height="100px" src="<?php echo '../img/product/' . $row['picture']; ?>">
                            <h4 class="show_detail"><?php echo $row['name']; ?></h4>
                            <h2 class="show_detail">$ <?php echo $row['price']; ?></h2>
                            <br>
                        </div>
                    </a>
                <?php
                                }
                            }
                        }   
                    }
                ?>




            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="../img/logo_brand/logo1.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 39 Ben Chung, Ha Noi</li>
                            <li>Phone: +84 816.457.716</li>
                            <li>Email: shrek_juice@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a target="_blank" href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p></div>
                        <div class="footer__copyright__payment"><img src="../img/logo_brand/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../bs4/js/jquery-3.3.1.min.js"></script>
    <script src="../bs4/js/bootstrap.min.js"></script>
    <script src="../bs4/js/jquery.nice-select.min.js"></script>
    <script src="../bs4/js/jquery-ui.min.js"></script>
    <script src="../bs4/js/jquery.slicknav.js"></script>
    <script src="../bs4/js/mixitup.min.js"></script>
    <script src="../bs4/js/owl.carousel.min.js"></script>
    <script src="../bs4/js/main.js"></script>



</body>

</html>

<?php
    db_disconnect($db);
?>