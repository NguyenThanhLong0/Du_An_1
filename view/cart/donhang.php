<!-- ================ start banner area ================= -->
<section class="blog-banner-area" style="height: 200px;" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>ĐƠN HÀNG</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng-Đơn hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->

<!--================Order Details Area =================-->
<section class="order_details section-margin--small">
    <form action="index.php?act=billcomfirm" method="post">
        <div class="container">
            <!-- <p class="text-center billing-alert">Thông tin khách hàng.</p> -->
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                    <div class="confirmation-card" style="width: 1110px;">
                        <table class="order-rable">
                            <h3 class="billing-title"> Thông tin khách hàng</h3>
                            <?php
                            if (isset($_SESSION['taikhoan'])) {
                                $hoten = $_SESSION['taikhoan']['hoten'];
                                $diachi = $_SESSION['taikhoan']['diachi'];
                                $email = $_SESSION['taikhoan']['email'];
                                $sdt = $_SESSION['taikhoan']['sdt'];
                            } else {
                                $hoten = "";
                                $diachi = "";
                                $email = "";
                                $sdt = "";
                            }
                            ?>
                            <tr>

                                <td>Người đặt hàng</td>
                                <td><input class="form-control" type="text" name="hoten" style="width: 400px;" value="<?= $hoten ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input class="form-control" type="text" name="email" style="width: 400px;" value="<?= $email ?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input class="form-control" type="text" name="diachi" style="width: 400px;" value="<?= $diachi ?>"></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td><input class="form-control" type="text" name="sdt" style="width: 400px;" value="<?= $sdt ?>"></td>
                            </tr>
                        </table>

                    </div>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                    <div class="confirmation-card" style="width: 1110px;">
                        <table class="order-rable">
                            <h3 class="billing-title">Phương thức thanh toán</h3>
                            <tr>
                                <td><input type="radio" name="pttt" id="" value="0" checked></td>
                                <td>Thanh toán khi nhận hàng</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pttt" id="" value="1" ></td>
                                <td>Thanh toán mã QR Momo</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pttt" id="" value="2" ></td>
                                <td>Thanh toán VNpay</td>
                            </tr>

                            <!-- <tr>
                                <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="view/thanhtoan/ttmomoqr.php">
                                    <input type="submit" name="momo" id="" value="Thanh toán MOMO QR">
                                    <<-- <td>Thanh toán online</td> 
                                </form>
                            </tr> -->

                        </table>

                    </div>
                </div>

            </div>
            <div class="order_details_table">
                <h2>Thông tin giỏ hàng</h2>
                <div class="table-responsive">
                    <table class="table">
                        <?php
                        global $img_path;
                        $tong = 0;
                        echo '<thead>
                            <tr>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Size</th>
                                <th scope="col">Màu sắc</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh = $img_path . $cart[2];
                            $ttien = $cart[3] * $cart[6];
                            $tong += $ttien;
                            $i = 0;
                            echo '<tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img height="100px" src="' . $cart[2] . '" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p>' . $cart[1] . '</p>
                                                </div>
                                            </div>
                                        </td>
                        
                                        <td>
                                            <h5>$' . $cart[3] . '</h5>
                                        </td>
                                        <td>' . $cart[4] . '</td>
                                        <td>' . $cart[5] . '</td>
                                        <td>' . $cart[6] . '</td>
                                        <td>
                                            <h5>$' . $ttien . '</h5>
                                        </td>
                                    </tr>';
                            $i++;
                        }
                        echo '<tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <h5>TỔNG TIỀN ĐƠN HÀNG:</h5>
                                    </td>
                                    <td>
                                        <h5>$' . $tong . '</h5>
                                    </td>
                                </tr>'; ?>

                        <tr class="bottom_button">
                            <td>
                                <input class="button" type="submit" value="XÁC NHẬN ĐẶT HÀNG" name="dydathang">
                            </td>

                        </tr>

                        </tbody>



                    </table>
                </div>
            </div>
        </div>
    </form>
</section>
<!--================End Order Details Area =================-->