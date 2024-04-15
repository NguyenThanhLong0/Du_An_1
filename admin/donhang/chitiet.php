<?php
if (is_array($donhang)) {
    extract($donhang);
    $xoadh = "index.php?act=xoadh&ma_donhang=" . $ma_donhang;
    $suadh = "index.php?act=suadh&ma_donhang=" . $ma_donhang;
}

if (is_array($billct)) {
    extract($billct);
}

$ttdh = get_ttdh($trangthai_dh);

?>
<div class="khungaddm">
    <div class="tieude">
        <h1>Chi tiết đơn hàng</h1>
    </div>
    <div class="btn-form-detail ">
        <?php
        $xoadh = "index.php?act=xoadh&ma_donhang=" . $ma_donhang;
        echo '
        <div >
            <a href="' . $suadh . '"  class="btn-update">Sửa</a>
        </div>
        <div >
          
            <a href="' . $xoadh . '" class="btn-delete " >Hủy</a>
        </div>';
        ?>
    </div>

    <div class=" donhangct">
        <div class="form-group">
            <div class="title">
                <h2>Thông tin khách hàng</h2>
            </div>
            <table class="tb_detail">
                <?php
                echo '<tr>
                        <th>Mã đơn hàng</th>
                        <td>DH-' . $ma_donhang . '</td>
                    </tr>

                    <tr>
                        <th>Tên khách hàng</th>
                        <td>' . $tenkh . '</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>' . $email_dh . '</td>
                    </tr>

                    <tr>
                        <th>Địa chỉ giao hàng</th>
                        <td>' . $dc_dh . '</td>
                    </tr>

                    <tr>
                        <th>Số điện thoại</th>
                        <td>' . $sdt_dh . '</td>
                    </tr>

                    <tr>
                        <th>Ngày đặt hàng</th>
                        <td>' . $ngaydathang . '</td>
                    </tr>

                    <tr>
                        <th>Đơn giá</th>
                        <td>$' . $tong . '</td>
                    </tr>

                    <tr>
                        <th>Tình trạng</th>
                        <td>' . $ttdh . '</td>
                    </tr>';
                ?>
            </table>
     </div>
    </div>
    <div class="nutxn">
    <?php
    if ($trangthai_dh == 0) {
        echo '<div class="form-confirm mr28">
        <form action="index.php?act=xacnhandh" method="post">
            <input type="hidden" name="ma_donhang" value="' . $ma_donhang . '">
            <input type="submit" name="xacnhan" value="Xác nhận đơn hàng">
        </form>
    </div>';
    }
    if ($trangthai_dh == 1) {
        echo '<div class="form-confirm mr28">
        <form action="index.php?act=xacnhangiaohang" method="post">
            <input type="hidden" name="ma_donhang" value="' . $ma_donhang . '">
            <input type="submit" name="xacnhan" value="Giao hàng">
        </form>
    </div>';
    }
    // if ($trangthai_dh == 3) {
    //     echo '<div class="form-confirm mr28">
    //     <form action="index.php?act=xacnhanthanhtoan" method="post">
    //         <input type="hidden" name="ma_donhang" value="' . $ma_donhang . '">
    //         <input type="submit" name="xacnhan" value="Thanh toán thành công">
    //     </form>
    // </div>';
    // }
    ?></div>
<br>

    <div class="form-group">
        <div class="title" >
            <h2>Thông tin đơn hàng</h2>
        </div>
        <div class="row form-content ">
            <table>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>

                <?php
                $img_path = "../upload/ ";
                foreach ($billct as $bill) {
    
                    echo '<tr>
                    <td>DA1-' . $bill['ma_donhang']  . '</td>
                    <td>' . $bill['ten_san_pham'] . '</td>
                    <td> <img src="' . $bill['hinh'] . '" height="100px" alt=""></td>
                    <td>$' . $bill['gia_sanpham'] . '</td>
                    <td>' . $bill['soluong'] . '</td>
                    <td>$' . $bill['thanhtien'] . '</td>
                          </tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>