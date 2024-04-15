<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách Đơn hàng</h1>
    </div>
    <div class="form-group">
        <form action="index.php?act=listdh" method="post">
            <input type="text" name="kyw" placeholder="Tìm kiếm đơn hàng">
            <input type="submit" name="listok" value="Tìm ">

        </form>
    </div>
    <div class="khungtables">
        <table class="table">
            <tr>
                <th>Mã đơn hàng</th>
                <th> Thông tin khách hàng</th>
                <th>Số lượng</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>THAO TÁC</th>
            </tr>
            <?php
            foreach ($listbill as $bill) {
                extract($bill);
                $countsp = loadall_cart_count($bill['ma_donhang']);
                $suadh = "index.php?act=suadh&ma_donhang=" . $ma_donhang;
                $xoadh = "index.php?act=xoadh&ma_donhang=" . $ma_donhang;
                $chitietdh = "index.php?act=chitietdh&ma_donhang=" . $ma_donhang;
                $ttdh = get_ttdh("$bill[trangthai_dh]");
                $kh = $bill["tenkh"] . '
                    <br>' . $bill["dc_dh"] . '
                    <br>' . $bill["sdt_dh"] . '
                    <br>' . $bill["email_dh"];
                echo '<tr>
                    <td>DA1-' . $bill['ma_donhang'] . '</td>
                    <td>' . $kh . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . $bill["ngaydathang"] . '</td>
                    <td><strong>$' . $bill['tong'] . '</strong></td>
                    <td>' . $ttdh . '</td>
                    <td><a href="' . $suadh . '"><input type="button" value="Cập nhật thông tin khách hàng"></a><a href="' . $chitietdh . '"><input type="button" value="Chi tiết"></a></td>
                </tr>';
            } ?>
        </table>
    </div>
</section>
