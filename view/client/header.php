<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/presiden/presiden/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 14:48:14 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Presiden – Fashion eCommerce HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../thu_vien/asset/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/ionicons.min.css">
    <!--material design min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/material.design.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="../../thu_vien/asset/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../../thu_vien/asset/css/style.css">

    <!--modernizr min js here-->
    <script src="../../thu_vien/asset/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->

    <!--offcanvas menu area end-->

    <header>
        <div class="main_header">
            <div class="header_container sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php"><img src="../../thu_vien/asset/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="header_container_right">
                                <!--main menu start-->
                                <div class="main_menu menu_position">
                                    <nav>
                                        <ul>
                                            <li><a class="active" href="index.php">Trang chủ<i class="fa fa-angle-down"></i></a>

                                            </li>
                                            <li class="mega_items"><a href="index.php?act=sanpham">Sản Phẩm<i class="fa fa-angle-down"></i></a>
                                                <div class="mega_menu">
                                                    <ul class="mega_menu_inner">
                                                        <li><a href="#">Danh mục sản phẩm</a>
                                                            <?php   
                                                          
                                                            foreach ($all_dm as  $value) {
                                                                extract($value);
                                                             
                                                                $link = "index.php?act=sanpham&iddm=" . $id;
                                                                echo '<ul>
                                                        <li><a href="' . $link . '">' . $ten_dm . '</a></li> 
                                                        </ul>';
                                                            }
                                                            ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="index.php?act=tintuc">Tin Tức </a>
                                                <!-- <ul class="sub_menu pages">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="services.html">services</a></li>
                                                    <li><a href="faq.html">Frequently Questions</a></li>
                                                    <li><a href="index.php?act=lienhe">contact</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                </ul> -->
                                            </li>
                                            <!-- <li><a href="about.html">about Us</a></li> -->
                                            <li><a href="index.php?act=lienhe"> Liên hệ</a></li>
                                            <li><a href="index.php?act=dangnhap_tk"> Đăng Nhập</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                                <!--main menu end-->
                                <div class="header_right_info">
                                    <ul>
                                        <li class="search_box"><a href="javascript:void(0)"><img src="../../thu_vien/asset/img/icon/icon-search.png" alt=""></a>
                                            <div class="search_widget">
                                                <form action="index.php?act=sanpham" method="post">
                                                    <input name="timkiem" placeholder="Search entire store here ..." type="text">
                                                    <input style=" position: absolute;top: 0; right: 0; width: 50px;height: auto;border: 0; background: #09c6ab;color: #fff;font-size: 14px;padding: 0;" type="submit" name="smb"></input>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="header_account"><a href="javascript:void(0)"><img src="../../thu_vien/asset/img/icon/icon-account.png" alt=""></a>
                                            <div class="dropdown_account">
                                                <div class="dropdown_account-list">
                                                    <ul>
                                                        <li><a href="index.php?act=dangnhap"> Đăng Nhập</a></li>
                                                        <li><a href="index.php?act=taikhoan">Tài Khoản</a></li>
                                                        <li><a href="index.php?act=giohang">Giỏ Hàng</a></li>
                                                        <li><a href="index.php?act=thanhtoan">Thanh toán</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mini_cart_wrapper"><a href="javascript:void(0)"><img src="../../thu_vien/asset/img/icon/icon-cart.png" alt=""> <span class="item_count">2</span></a>
                                            <!--mini cart-->
                                            <div class="mini_cart">
                                                <div class="cart_gallery">
                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#"><img src="../../thu_vien/asset/img/s-product/product.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">Primis In Faucibus</a>
                                                            <p>1 x <span> $65.00 </span></p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#"><img src="../../thu_vien/asset/img/s-product/product2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">Letraset Sheets</a>
                                                            <p>1 x <span> $60.00 </span></p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mini_cart_table">
                                                    <div class="cart_table_border">
                                                        <div class="cart_total">
                                                            <span>Sub total:</span>
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="cart_total mt-10">
                                                            <span>total:</span>
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mini_cart_footer">
                                                    <div class="cart_button">
                                                        <a href="index.php?act=giohang"><i class="fa fa-shopping-cart"></i> Xem Giỏi Hàng</a>
                                                    </div>
                                                    <div class="cart_button">
                                                        <a href="index.php?act=thanhtoan"><i class="fa fa-sign-in"></i> Thanh Toán</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--mini cart end-->
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>