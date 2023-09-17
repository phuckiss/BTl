<?php 
    require_once('../database+function/initialize.php');
    unset($_SESSION['username']); 
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

<div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <nav class="humberger__menu__nav mobile-menu">
            <div class="humberger__menu__logo">
                <a href="./index.php"><img src="../img/logo_brand/logo1.png" alt=""></a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop-grid.php">Shop</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
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
                            <li><a href="shop-grid.php">Shop</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
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



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="../img/logo_brand/40480.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+84-816-457-716</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>39 Ben Chung, Dong Anh, Ha Noi</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>8:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>shrek_juice@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.244199672733!2d105.80726631424805!3d21.18245598789103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313501c35a1f8305%3A0x1a9549a92d4340cf!2sShrek-Juice!5e0!3m2!1sen!2s!4v1620295472472!5m2!1sen!2s" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Ha Noi</h4>
                <ul>
                    <li>Phone: +84-816-457-716</li>
                    <li>Add: 39 Ben Chung, Dong Anh</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Your message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

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