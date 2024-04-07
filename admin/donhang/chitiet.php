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
<div class="box-right">
    <div class="title-page">
        <p>Chi tiết đơn hàng</p>
    </div>

    <div class="btn-form-detail mr10">
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

    <div class="mt70 donhangct">
        <div class="row pd10">
            <div class="title">
                <p>Thông tin khách hàng</p>
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
                        <td>' . number_format($tong) . ' <u>$</u></td>
                    </tr>

                    <tr>
                        <th>Tình trạng</th>
                        <td>' . $ttdh . '</td>
                    </tr>';
                ?>
            </table>
        </div>
    </div>

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
    if ($trangthai_dh == 3) {
        echo '<div class="form-confirm mr28">
        <form action="index.php?act=xacnhanthanhtoan" method="post">
            <input type="hidden" name="ma_donhang" value="' . $ma_donhang . '">
            <input type="submit" name="xacnhan" value="Thanh toán thành công">
        </form>
    </div>';
    }

    ?>

    <div class="mt90 donhangct">
        <div class="statistics-title2 pd10" style="margin-top: 0;">
            <p>Thông tin đơn hàng</p>
        </div>
        <div class="row form-content pd10">
            <table>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <!-- <th class="text-center">Thao tác</th> -->
                </tr>

                <?php
                foreach ($billct as $bill) {
                    extract($bill);
                    $hinhpath = "../upload/" . $hinh;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "Không có hình ảnh";
                    }
                    echo '<tr>
    <td>' . $ma_donhang  . '</td>
    <td>' . $ten_san_pham . '</td>
    <td>' . $hinh . '</td>
    <td>' . number_format($gia_sanpham, 0, ",", ".") . ' <u>$</u></td>
    <td>' . $soluong . '</td>
    <td>' . number_format($thanhtien, 0, ",", ".") . ' <u>$</u></td>
    
</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
<script>
    // Gắn sự kiện lắng nghe cho tất cả các phần tử có class deleteLink
    const deleteLinks = document.querySelectorAll('.deleteLink');
    deleteLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

            const ma_donhang = this.getAttribute('data-id'); // Lấy ID từ thuộc tính data
            const xoadh = "index.php?act=xoadh&ma_donhang=" + ma_donhang;

            Swal.fire({
                title: "Xác nhận hủy đơn?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xác nhận"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Thực hiện yêu cầu xóa thông qua Ajax hoặc window.location.href tại đây
                    Swal.fire({
                        title: "Đã hủy đơn hàng!",
                        icon: "success"
                    }).then(() => {
                        // Chuyển hướng đến URL xóa
                        window.location.href = xoadh;
                    });
                }
            });
        });
    });
</script>