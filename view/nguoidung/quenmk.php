<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Quên mật khẩu</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đăng nhập/Quên mật khẩu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->

<!--================Login Box Area =================-->
<section class="login_box_area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <div class="hover">
                        <h4>Bạn mới vào trang web của chúng tôi?</h4>
                        <p>Có những tiến bộ đang được thực hiện hàng ngày trong thời trang và mua sắm, và một ví dụ điển hình cho điều này là</p>
                        <a class="button button-account" href="index.php?act=dangky">Tạo tài khoản</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <!-- <?php
                    // if (isset($_SESSION['taikhoan']) && (is_array($_SESSION['taikhoan']))) {
                    //     extract($_SESSION['taikhoan']);
                    // }
                    ?> -->

                    <h3>Quên Mật Khẩu</h3>
                    <form class="row login_form" action="index.php?act=quenmk" id="register_form" method="post">
                    
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Nhập Email tài khoản quên mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                    </div>
                    
                    <div class="col-md-12 form-group">
                        
                        <button type="submit" name="guiemail" value="submit" class="button button-register w-100">Gửi</button>
                    </div>

                    </form>
                    <p style="color: red; font-weight: bold" class="thongbao">
                        <?php

                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->