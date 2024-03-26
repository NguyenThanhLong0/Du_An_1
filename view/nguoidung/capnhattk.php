<!-- ================ start banner area ================= -->
<section class="blog-banner-area" style="height: 200px;" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Cập nhật thông tin tài khoản người dùng</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đăng nhập/Cập nhật thông tin tài khoản người dùng</li>
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
                    <?php
                    if (isset($_SESSION['taikhoan']) && (is_array($_SESSION['taikhoan']))) {
                        extract($_SESSION['taikhoan']);
                    }
                    ?>

                    <h3>Cập nhật thông tin tài khoản</h3>
                    <form class="row login_form" action="index.php?act=capnhattk" id="register_form" method="post">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Họ và tên" value="<?= $hoten ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Họ và tên'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $email ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa chỉ" value="<?= $diachi ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="username" name="taikhoan" placeholder="Username" value="<?= $taikhoan ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="password" name="matkhau" placeholder="Password" value="<?= $matkhau ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="hidden" name="ma_nguoidung" value="<?= $ma_nguoidung ?>">
                        <input type="hidden" name="vaitro" value="<?= $vaitro ?>">
                        <button type="submit" name="capnhat" value="submit" class="button button-register w-100">Cập Nhật</button>
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