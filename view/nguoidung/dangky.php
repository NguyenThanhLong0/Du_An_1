<!-- ================ start banner area ================= -->
<section class="blog-banner-area" style="height: 200px;" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>ĐĂNG KÝ</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
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
                        <h4>Bạn đã có tài khoản?</h4>
                        <p>“Thời trang không ngừng tiến xa, và một ví dụ tốt cho điều này là sự sáng tạo trong việc kết hợp phong cách và xu hướng mới.”</p>
                        <a class="button button-account" href="index.php?act=dangnhap">Đăng nhập ngay!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner register_form_inner">
                    <h3>TẠO MỘT TÀI KHOẢN</h3>
                    <form class="row login_form" action="index.php?act=dangky" id="register_form" method="post">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Họ và tên" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Họ và tên'">
                            <span style="color: red"><?= isset($error['hoten']) ? $error['hoten'] : ''  ?></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                            <span style="color: red"><?= isset($error['email']) ? $error['email'] : ''  ?></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa chỉ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ'">
                            <span style="color: red"><?= isset($error['diachi']) ? $error['diachi'] : ''  ?></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="sdt" name="sdt" placeholder="Số điện thoại" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số điện thoại'">
                            <span style="color: red"><?= isset($error['sdt']) ? $error['sdt'] : ''  ?></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="username" name="taikhoan" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            <span style="color: red"><?= isset($error['taikhoan']) ? $error['taikhoan'] : ''  ?></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="matkhau" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            <span style="color: red"><?= isset($error['matkhau']) ? $error['matkhau'] : ''  ?></span>
                        </div>

                        <!-- <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Keep me logged in</label>
                            </div>
                        </div> -->
                        <div class="col-md-12 form-group">
                            <button type="submit" name="dangky" value="submit" class="button button-register w-100">Đăng ký</button>
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