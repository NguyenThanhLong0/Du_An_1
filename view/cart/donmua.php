<?php

if (empty($_SESSION['taikhoan'])) {
    echo '<script>alert("Vui lòng đăng nhập để xem đơn mua !");</script>';
    echo "<script>window.location.href = 'index.php?act=dangnhap';</script>";
}
?>
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
        <p class="text-center billing-alert">Thông tin về đơn hàng mà bạn đã đặt...</p>
        <div class="order_details_table">
            <h2>Đơn hàng của bạn:</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã đơn hàng</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Tình trạng</th>
                            <th scope="col">Chi tiết</th>
                            <th scope="col">Xác nhận</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($listdonmua as $donmua) {
                        extract($donmua);
                        $chitietdonmua = "index.php?act=chitietdonmua&ma_donhang=" . $ma_donhang;
                        $ttdh = get_ttdh($trangthai_dh);
                        if ($trangthai_dh == 2) {
                            $da_nhan = '<input type="submit" name="xacnhan" value="Đã nhận" class="w80">';
                        } else {
                            $da_nhan = '';
                        }
                        echo '<tbody>
                        <tr>
                            <td>
                                <p><a href="' . $chitietdonmua . '">DA1-' . $ma_donhang . '</a></p>
                            </td>
                            <td ><a href="' . $chitietdonmua . '">' . $sdt_dh . '</a></td>
                            <td ><a href="' . $chitietdonmua . '">' . $dc_dh . '</a></td>
                            <td >$' . $tong .' </td>
                            <td >' . $ttdh . '</td>
                            <td ><a href="' . $chitietdonmua . '">Xem chi tiết</a></td>
                            <td>      
                                <form action="index.php?act=danhan" method="post">
                                    <input type="hidden" name="id" value="' . $id . '">
                                    ' . $da_nhan . '
                                </form>
                            </td>
                            
                        </tr>';
                    }
                    echo '
                    </tbody>';
                    ?>
                </table>
                <br>
                <div class="bottom_button">
                    <a href="index.php?act=sanpham"><input class="button" type="submit" value="Tiếp tục mua sắm"></a>


                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->