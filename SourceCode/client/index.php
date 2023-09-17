<?php 
    require_once('../database+function/database.php');
    require_once('../database+function/initialize.php');
    unset($_SESSION['username']); 
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

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
    <!-- Humberger Begin -->
<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="./index.php"><img src="../img/logo_brand/logo1.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
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
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="shop-grid.php">Shop</a></li>
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
    <section class="breadcrumb-section set-bg" data-setbg="../img/logo_brand/40480.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Home</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="item">
                    <h1 style="font-size: 400%;">Different quality</h1> <br>
                    <h4 style="font-size: 120%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With over 10 years of experience in serving customers, modern processing technology, ensuring food safety, Sherk-Juice is proud to be the source of beverage juice for events such as: Conference, Weddings, Parties,... Come to us, we guarantee to help you have a great party!  </h4>
                    <br><a href="shop-grid.php" class="btn btn-primary btn-lg" style="display:block;margin:0 auto;max-width:200px">Learn More</a> <br>
                </div>

            </div>
            <div class="col-md-7">
                <div class="item">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/logo_brand/1.jpg" alt="We serve the best! " width="100%" height="450" margin="0">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/logo_brand/pt1.jpg" alt="Customer is my responsibility !" width="100%" height="450" margin="0">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/logo_brand/pt2.jpg" alt="" width="100%" height="450" margin="0">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/logo_brand/pt4.jpg" alt="" width="100%" height="450" margin="0">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> <br>
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php
                        $list = find_all_category();
                        while($row = mysqli_fetch_assoc($list)){
                            $picpro = find_product_by_catid($row['categoryID']);
                                if(isset($picpro['picture'])){
                    ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="<?php echo '../img/product/' . $picpro['picture'] ?>">
                                <h5><a href="<?php echo 'shop-grid.php?categoryID=' . $row['categoryID'];?>"><?php echo $row['name']; ?></a></h5>
                            </div>
                        </div>
                    <?php 
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section> <br><br> <hr> 
    <div class="container">
        <div class="container-fluid padding" id="mid">
                <div class="row welcome text-center">
                    <div class="col-12">
                        <h1 class="display-4">Tested for food safety by </h1> <br>
                    </div>
                    <hr> 
                </div>
            </div>
            <div class="container-fluid padding">
                <div class="row text-center padding" id="solu">
                    <div class="col-xs-12 col-sm-6 col-md-4 ">
                        <img src="../img/logo_brand/fsi636187075666563725.png">	
                        <h3>FSI</h3>
                        <p>The Food Safety Authority - Ministry of Health appoints VinaCert as a regulation conformity certification organization for products with corresponding national technical regulations. </p>					
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="../img/logo_brand/vfa.png">			
                        <h3>VFA-HN</h3>
                        <p>The Food Safety and Hygiene Sub-Department is a specialized agency under the Hanoi Department of Health, has legal status, has its own head office, seal, and accounts opened at the State Treasury and banks according to the provisions of law.</p>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <img src="../img/logo_brand/unnamed.png">		
                        <h3>FOOD SCIENCE</h3>
                        <p>The Food Safety Authority - Ministry of Health appoints Sherk-Juice as a conformity certification organization for products with corresponding national technical regulations. </p>
                    </div>
                </div>	<br>
                <hr><br>	
            </div>
            <div class="container-fluid padding">
                <div class="row padding">
                    <div class="col-md-12 col-lg-5" id="contentht">
                        <h1 class="text-center">Juice for health </h1> <br>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;100% organically grown green vegetable ingredients with clear origin. Always fresh pressed according to each treatment to improve the health of each customer. Pure. </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;Do not dilute, do not use refined sugar, preservatives and additives. Standard packaging, environmentally friendly packaging. </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;Using advanced modern technology along with a team of professional staff with many years of experience. We guarantee the quality of products that are safe to use, do not contain fats and substances harmful to health. </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;The production process ensures safety and quality HACCP. Friendly and professional delivery. Make sure to schedule the treatment to improve health. </p>
                    </div>
                    <div class="col-lg-7">
                        <img src="../img/logo_brand/usp-1.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br><br>
        <!-- Categories Section End -->

        <!-- Featured Section Begin -->

        <!-- Footer Section Begin -->
        <br><br><br>
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