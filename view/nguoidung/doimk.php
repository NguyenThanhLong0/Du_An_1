<!-- ================ start banner area ================= -->
<section class="blog-banner-area" style="height: 200px;" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>ĐỔI MẬT KHẨU</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đổi mật khẩu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->

<!--================Login Box Area =================-->
<section class="login_box_area section-margin" style="display:flex; justify-content: center; align-items: center">
            <div class="col-lg-6">
                <div class="login_form_inner register_form_inner">
                    <h3>ĐỔI MẬT KHẨU </h3>
                    <form class="row login_form" action="index.php?act=doimk" id="register_form" method="post">
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="matkhau" placeholder="Nhập Mật khẩu hiện tại" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="newpass" placeholder="Nhập Mật khẩu mới" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="repass" placeholder="Nhập lại Mật khẩu mới" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="hidden" name="ma_nguoidung" value="<?= $ma_nguoidung ?>">
                            <input type="submit" style="color: white" name="dydoimk" value="Đồng ý đổi mật khẩu" class="button button-register w-100"></input>
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
        
</section>
<!--================End Login Box Area =================-->