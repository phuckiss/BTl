<?php
require_once('database.php');
require_once('../database+function/initialize.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../bs4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bs4/css/font-awesome.min.css">
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;

        }

        .carousel-item img {
            margin: 0;
        }

        body {
            margin: 0;
        }
    </style>
</head>

<body>
    <?php include('../database+function/successfully.php'); ?>
    <div class="grid wide">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>


            <div class="carousel-inner" style="width: 80% ; margin: auto;">
                <div class="carousel-item active">
                    <img src="../img/logo_admin/1.jpg" alt="We serve the best! " width="100%" height="500" margin="0">
                </div>
                <div class="carousel-item">
                    <img src="../img/logo_admin/10.jpg" alt="Customer is my responsibility !" width="100%" height="500" margin="0">
                </div>  
                <div class="carousel-item">
                    <img src="../img/logo_admin/11.jpg" alt="" width="100%" height="500" margin="0">
                </div>
            </div>

            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <br></br>

        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Thông tin Admin chính thức!</h1> <br>
                </div>

                <hr>
            </div>
        </div>
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4 ">
                    <img src="../img/logo_admin/cat.png" width="40%" height="45%">
                    <h3>Nguyễn Doãn Thành</h3>
                    <p>Trưởng Nhóm</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <img src="../img/logo_admin/cat1.png" width="40%" height="45%">
                    <h3>Nguyễn Yến Nhi</h3>
                    <p>Desiner</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img src="../img/logo_admin/cat2.png" width="40%" height="45%">
                    <h3>Cao Hưng</h3>
                    <p> Cmao Hmung</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="container-fluid padding">
                <div class="row text-center padding">
                    <div class="col-12 social padding">
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4">

                        <hr class="light">
                        <p>0876999999</p>
                        <p>shrekjuice@gmail.com</p>
                        <p>Đội Cấn - Hà Nội - Việt Nam</p>
                    </div>
                    <div class="col-md-4">
                        <hr class="light">
                        <h5>Giờ Làm VIệc</h5>
                        <hr class="light">
                        <p>Thứ Hai- Thứ Sáu: 8am - 5pm</p>
                    </div>
                    <div class="col-md-4">
                        <hr class="light">
                        <h5>Dịch Vụ</h5>
                        <hr class="light">
                        <p>Tư Vấn Khách Hàng</p>
                        <p>Hỗ Trợ Đổi Trả</p>
                        <p>Khuyến Mãi Đi Kèm</p>
                    </div>
                    <div class="col-12">
                        <hr class="light-100">
                        <h5>&copy; Shrek-Juice</h5>
                    </div>
                </div>
            </div>
        </footer>




    </div>

    <script src="../bs4/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="../bs4/js/bootstrap.min.js"></script>
</body>

</html>

<?php
db_disconnect($db);
?>