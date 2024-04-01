<!-- ================ start banner area ================= -->
<section class="blog-banner-area" style="height: 200px;" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>ĐẶT HÀNG THÀNH CÔNG</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng-Đơn hàng-Đặt hàng thành thông</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->

<!--================Order Details Area =================-->
<section class="order_details section-margin--small">
    <div class="container">
        <p class="text-center billing-alert">Thank you. Đơn hàng của bạn đã được chúng tôi ghi nhận.</p>
        <div class="row mb-5">
            <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                <div class="confirmation-card">

                    <h3 class="billing-title">Thông tin đơn hàng</h3>
                    <table class="order-rable">
                        <?php
                        if (isset($donhang) && ($donhang)) {
                            extract($donhang);
                        }
                        ?>
                        <tr>
                            <td>Mã đơn hàng: </td>
                            <td>DA1- <?=  $donhang['ma_donhang'] ?></td>
                        </tr>
                        <tr>
                            <td>Ngày đặt hàng: </td>
                            <td><?= $donhang['ngaydathang'] ?></td>
                        </tr>
                        <tr>
                            <td>Tổng đơn hàng: </td>
                            <td>$<?= $donhang['tong'] ?></td>
                        </tr>

                        <tr>
                            <td>Phương thức thanh toán: </td>
                            <td><?= ($donhang['pttt'] == 0) ? 'Thanh toán khi nhận hàng' : (($donhang['pttt'] == 1) ? 'Thanh toán mã QR Momo' : 'Thanh toán VNPay'); ?></td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                <div class="confirmation-card" style="width: 550px;">
                    <h3 class="billing-title">Thông tin khách hàng</h3>
                    <table class="order-rable">
                        <tr>
                            <td>Người đặt: </td>
                            <td><?= $donhang['tenkh'] ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ: </td>
                            <td><?= $donhang['dc_dh'] ?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?= $donhang['email_dh'] ?></td>
                        </tr>
                        <tr>
                            <td>SĐT: </td>
                            <td><?= $donhang['sdt_dh'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <div class="order_details_table">
            <h2>Order Details</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <?php
                    don_hang_ct($donhangct);
                    $_SESSION['mycart'] = [];
                    ?>

                </table>
                <br><br>
                <div class="bottom_button">
                    <a href="index.php"><input class="button" type="submit" value="Trở về Trang chủ"></a>


                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->