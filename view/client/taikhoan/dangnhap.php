 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="breadcrumb_content">
                     <ul>
                         <li><a href="index.php">home</a></li>
                         <li>My account</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--breadcrumbs area end-->

 <!-- customer login start -->
 <div class="customer_login mt-60">
     <div class="container">
         <div class="row">
             <!--login area start-->
             <div class="col-lg-6 col-md-6">
                 <div class="account_form">
                     <h2>Đăng nhập</h2>
                     <form action="index.php?act=dangnhap_tk" method="post">
                         <p>
                             <label>Username or email <span>*</span></label>
                             <input type="text" name="user">
                         </p>
                         <p>
                             <label>Passwords <span>*</span></label>
                             <input type="password" name="pass">
                         </p>
                         <div >
                             <a href="#">Lost your password?</a>
                           

                           
                           <input style="width: 150px; margin-left: 200px;"  type="submit" name="login" value="đăng nhập">

                         </div>
                         <?php
                                if (isset($thongbao1) && ($thongbao1) != "") {
                                    echo $thongbao1;
                                }
                        ?>
                     </form>
                 </div>
             </div>
             <!--login area start-->

             <!--register area start-->
             <div class="col-lg-6 col-md-6">
                 <div class="account_form register">
                     <h2>Đăng kí tài khoản</h2>
                     <form action="index.php?act=dangki_tk" method="POST">
                         <p>
                             <label>user name<span>*</span></label>
                             <input type="text" name="user">
                         </p>
                         <p>
                             <label>Passwords <span>*</span></label>
                             <input type="password" name="pass">
                         </p>

                         <div >
                             <?php
                                if (isset($thongbao) && ($thongbao) != "") {
                                    echo $thongbao;
                                }
                                ?>
                             
                               <input  style="width: 150px; margin-left: 350px;" type="submit" name="dangki" name="dangki" value="đăng kí">

                         </div>

                     </form>
                 </div>
             </div>
             <!--register area end-->
         </div>
     </div>
 </div>
 <!-- customer login end -->

 <!--brand area start-->
 <div class="brand_area color_five">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="brand_container owl-carousel">
                     <div class="single_brand">
                         <a href="#"><img src="../../thu_vien/asset/img/brand/brand1.png" alt=""></a>
                     </div>
                     <div class="single_brand">
                         <a href="#"><img src="../../thu_vien/asset/img/brand/brand2.png" alt=""></a>
                     </div>
                     <div class="single_brand">
                         <a href="#"><img src="../../thu_vien/asset/img/brand/brand3.png" alt=""></a>
                     </div>
                     <div class="single_brand">
                         <a href="#"><img src="../../thu_vien/asset/img/brand/brand4.png" alt=""></a>
                     </div>
                     <div class="single_brand">
                         <a href="#"><img src="../../thu_vien/asset/img/brand/brand5.png" alt=""></a>
                     </div>
                     <div class="single_brand">
                         <a href="#"><img src="../../thu_vien/asset/img/brand/brand6.png" alt=""></a>
                     </div>
                     <div class="single_brand">
                         <a href="#"><img src="../../thu_vien/asset/img/brand/brand2.png" alt=""></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--brand area end-->