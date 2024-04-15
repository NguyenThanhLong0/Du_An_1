<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aroma Shop - Home</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="sizecolor.js">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">HOME</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NAM</a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $listdanhmuc = loadall_danhmuc_nam();
                                    foreach ($listdanhmuc as $dm_nam) {
                                        extract($dm_nam);
                                        $linkdmnam = "index.php?act=sanpham&ma_danh_muc_nam=" . $ma_danhmuc_nam;
                                        echo '<li class="nav-item"><a class="nav-link" href="' . $linkdmnam . '">' . $ten_danhmuc_nam . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NỮ</a>
                                <ul class="dropdown-menu">
                                    <!-- <li class="nav-item"><a class="nav-link" href="category.html">Vest Nữ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-product.html">Đầm</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.html">Chân váy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="confirmation.html">Sơ mi Nữ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cart.html">Áo CROPTOP</a></li> -->
                                    <?php
                                    $listdanhmuc = loadall_danhmuc_nu();
                                    foreach ($listdanhmuc as $dm_nu) {
                                        extract($dm_nu);
                                        $linkdmnu = "index.php?act=sanpham&ma_danh_muc_nu=" . $ma_danhmuc_nu;
                                        echo '<li class="nav-item"><a class="nav-link" href="' . $linkdmnu . '">' . $ten_danhmuc_nu . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="index.php?act=sanpham">SẢN PHẨM</a></li>
                            <!-- <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                                    <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                                </ul>
                            </li> -->

                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TÀI KHOẢN</a>
                                <ul class="dropdown-menu">
                                    <?php
                                    if (isset($_SESSION['taikhoan'])) {
                                        extract($_SESSION['taikhoan']);
                                        echo '<li class="nav-item">
                                        <a class="nav-link" href="index.php?act=dangnhap"><i class="ti-user"></i>'.$taikhoan.'</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="index.php?act=thoat">ĐĂNG XUẤT</a>
                                        </li>';
                                    }else {
                                    echo '<li class="nav-item">
                                        <a class="nav-link" href="index.php?act=dangnhap">ĐĂNG NHẬP</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="index.php?act=dangky">ĐĂNG KÝ</a></li>';
                                    }
                                    ?>
                                    <li class="nav-item"><a class="nav-link" href="index.php?act=donmua">ĐƠN MUA</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="index.php?act=diachi">ĐỊA CHỈ</a></li>
                        </ul>

                        <ul class="nav-shop">

                            <li class="nav-item">
                                <!-- <button type="submit"><i class="ti-search"></i></button> -->
                                <form action="index.php?act=sanpham" method="post" class="input-group ">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" required name="kyw">
                                        <button type="submit" class="input-group-btn ti-search" name="timkiem" value="Tìm" style="background-color: #c0c0c0; width: 35px; border-top-right-radius: 5px;border-bottom-right-radius: 5px"></button>
                                    </div>
                                </form>
                                
                                
                            </li>

                            <li class="nav-item"><button type="submit"> <a href="index.php?act=giohang"><i class="ti-shopping-cart"></i>
                                        <!-- <span class="nav-shop__circle">3</span>  -->
                                    </a></button> </li>
                            <!-- <li class="nav-item"><a class="button button-header" href="index.php?act=sanpham">Mua ngay</a></li> -->
                        </ul>
                    </div>


                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->