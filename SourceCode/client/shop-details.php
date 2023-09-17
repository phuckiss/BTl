<?php 
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');
    unset($_SESSION['username']); 
    $errors = [];

    function isFormValidated(){
        global $errors;
        return count($errors) == 0;
    }

    $id = $_GET['productID'];
    $product = find_product_by_id($id);
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
        <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>" >
        <input type="hidden" name="categoryID" value="<?php echo $product['categoryID']; ?>" > <br>  
    </form>  
    <!-- Page Preloder -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="./index.php"><img src="../img/logo_brand/logo1.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li><a href="./contact.php">Contact</a></li>
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
                <li><i class="fa fa-envelope"></i> shrek_juice@gmail.com</li>
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
                                <li><i class="fa fa-envelope"></i>  shrek_juice@gmail.com</li>
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
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="breadcrumb-section set-bg" data-setbg="../img/logo_brand/40480.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $product['name']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="<?php echo '../img/product/' . $product['picture']; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $product['name']; ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product__details__price">$ <?php echo $product['price']; ?></div>
                        <p><?php echo $product['detail']; ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">ADD TO CART</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <hr>
                    </div>
                </div>

                
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="content_sale"> <br>
                                    <h3>Specialized COMBO for the event !</h3> <br>
                                    <p><i class="fa fa-arrow-right" aria-hidden="true"></i>  Combo total order value of 399 immediately discount 5% </p>
                                    <p><i class="fa fa-arrow-right" aria-hidden="true"></i>  Combo total order value of 799$, discount now 12% !</p>
                                    <p><i class="fa fa-arrow-right" aria-hidden="true"></i>  Especially, total order value over 2000$, 30% off immediately!!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content_sale"> <br>
                                    <h3>Cooperation with shipping units</h3> <br>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-xs-4">
                                            <img class="logo_ship" src="../img/logo_brand/now.png" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-4">
                                            <img class="logo_ship" src="../img/logo_brand/images.png" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-4">
                                            <img class="logo_ship" src="../img/logo_brand/cure.png" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->


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