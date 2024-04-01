<?php
if (is_array($donmua)) {
    extract($donmua);
}
?>
<!-- ================ start banner area ================= -->
<section class="blog-banner-area" style="height: 200px;" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>ĐƠN MUA</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đơn mua</li>
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
        <div class="order_details_table">
            <h2>Order Details</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($listdonhang as $cart) {
                    $hinh = $img_path . $cart['hinh'];
                    $cart['thanhtien'] = $cart['gia_sanpham'] * $cart['soluong'];
                    $tong += $cart['thanhtien'];
                    echo '<tbody>
                        <tr>
                            <td>
                                <p><img height="100px" src="' . $cart['hinh'] . '" alt="">'.$cart['ten_san_pham'].'</p>
                            </td>

                            <td>
                                <h5>x'.$cart['soluong'].'</h5>
                            </td>
                            <td>
                                <h5>$'.$cart['gia_sanpham'].'</h5>
                            </td>
                            <td>
                                <p>$'.$cart['thanhtien'].'</p>
                            </td>
                        </tr>';
                        $i++;}
                        echo '
                        <tr>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td></td>
                            <td>
                                <h4>$'.$tong.'</h4>
                            </td>
                        </tr>
                    </tbody>';

                    }


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