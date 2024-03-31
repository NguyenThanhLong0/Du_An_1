<!-- ================ start banner area ================= -->
<section class="blog-banner-area" style="height: 200px;" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>ĐĂNG NHẬP</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
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
                        <p>Có những tiến bộ đang được thực hiện hàng ngày trong mua sắm thời trang, và một ví dụ điển hình cho điều này là</p>
                        <a class="button button-account" href="index.php?act=dangky">Tạo tài khoản</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <?php
                    if (isset($_SESSION['taikhoan'])) {
                        extract($_SESSION['taikhoan']);
                    ?>
                        <div class="row " >
                            <div class="col-md-12 form-group">
                                <h4>Xin chào
                                    <span style="color: red"><?= '<b>' . $taikhoan . ' </b>' ?></span>
                                </h4>
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="button button-account"><?php
                                                                        if ($vaitro == 1) { ?>
                                        <a class="button button-login w-100" href="admin/index.php">ĐĂNG NHẬP VÀO ADMIN</a>
                                    <?php } ?>
                                </button>
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="button button-account">
                                    <a class="button button-login w-100" href="index.php?act=capnhattk">CẬP NHẬT THÔNG TIN TÀI KHOẢN</a>
                                </button>
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="button button-account">
                                    <a class="button button-login w-100" href="index.php?act=doimk">ĐỔI MẬT KHẨU</a>
                                </button>
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="button button-account">
                                    <a class="button button-login w-100" href="index.php?act=thoat">ĐĂNG XUẤT</a>
                                </button>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <h3>Đăng nhập</h3>
                        <form class="row login_form" action="index.php?act=dangnhap" id="contactForm" method="post">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="taikhoan" name="taikhoan" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" name="dangnhap" class="button button-login w-100">Đăng nhập</button>
                                <a href="index.php?act=quenmk">Bạn quên mật khẩu?</a>
                            </div>
                        </form>
                        <p style="color: red; font-weight: bold" class="thongbao">
                            <?php

                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?></p>
                </div>
            </div> <?php
                    }
                    ?>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->