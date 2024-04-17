<?php

if (isset($donhang) && ($donhang)) {
    extract($donhang);
}
if (is_array($billct)) {
    extract($billct);
}
// $ttdh = get_ttdh($trangthai_dh);
?>
<!-- ================ start banner area ================= -->
<section class="blog-banner-area" style="height: 200px;" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Chi tiết đơn hàng <span style="color: red;">DA1-<?= $ma_donhang; ?></span></h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
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
        <div class="row mb-5">
            <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                <div class="confirmation-card">
                    <h3 class="billing-title">Thông tin đơn hàng</h3>
                    <table class="order-rable">
                        <tr>
                            <td>Mã đơn hàng: </td>
                            <td>DA1- <?= $ma_donhang ?></td>
                        </tr>
                        <tr>
                            <td>Ngày đặt hàng: </td>
                            <td><?= $ngaydathang ?></td>
                        </tr>
                        <tr>
                            <td>Tổng đơn hàng: </td>
                            <td>$<?= $tong ?></td>
                        </tr>
                        <tr>
                            <td>Phương thức thanh toán: </td>
                            <td><?= ($pttt == 0) ? 'Thanh toán khi nhận hàng' : (($pttt == 1) ? 'Thanh toán mã QR Momo' : 'Thanh toán VNPay'); ?></td>
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
                            <td><?= $tenkh ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ: </td>
                            <td><?= $dc_dh ?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?= $email_dh ?></td>
                        </tr>
                        <tr>
                            <td>SĐT: </td>
                            <td><?= $sdt_dh ?></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="cart_inner"><h4>Đơn hàng của bạn</h4>
                <div class="table-responsive">
                
                    <table class="table">

                        <?php
                        global $img_path;
                        $tong = 0;
                        $i = 0; //Tạo biến i để xác định vị trí idcart

                        echo '<thead>
                   <tr>
                       <th scope="col">Sản phẩm</th>
                       <th scope="col">Giá</th>
                       
                       <th scope="col">Số lướng</th>
                       <th scope="col">Thành tiền</th>
                   </tr>
               </thead>
               <tbody>';
                        foreach ($billct as $bl) {
                            extract($bl);
                            $ttien = $gia_sanpham * $soluong;
                            $tong += $ttien;

                            echo '<tr>
                               <td>
                                   <div class="media">
                                       <div class="d-flex">
                                           <img height="100px" src="' . $hinh . '" alt="">
                                       </div>
                                       <div class="media-body">
                                           <p>' . $ten_san_pham . '</p>
                                       </div>
                                   </div>
                               </td>
                               <td>
                                   <h5>$' . $gia_sanpham . '</h5>
                               </td>
                               
                               <td>' . $soluong . '</td>
                               <td>
                                   <h5>$' . $ttien . '</h5>
                               </td>
                           </tr>';
                            $i++;
                        }
                        echo '<tr>
                           <td></td>
                           <td></td>
                           <td>
                               <h5>TỔNG TIỀN:</h5>
                           </td>
                           <td>
                               <h5>$' . $tong . '</h5>
                           </td>
                       </tr>
                       </tbody>';
                        ?>
                    </table>
                    <div class="bottom_button">
                        <a href="index.php"><input class="button" type="submit" value="Trở về Trang chủ"></a>


                    </div>
                </div>
            </div>
        </div>
</section>
<!--================End Order Details Area =================-->