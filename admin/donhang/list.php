<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách Đơn hàng/h1>
    </div>
    <div class="form-group">
    <form action="index.php?act=listdh" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" placeholder="GO">
    </form>
    <div class="khungtables">
        <table class="table">
            <table>
                <tr>
                    <th></th>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <!-- <th>PHƯƠNG THỨC THANH TOÁN</th> -->
                    <th>Số lượng</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <!-- $bill -->
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $kh = $bill["tenkh"] . '
                    <br>' . $bill["dc_dh"] . '
                    <br>' . $bill["sdt_dh"] . '
                    <br>' . $bill["email_dh"];

                    $ttdh = get_ttdh("bill[trangthai_dh]");
                    // $pttt = get_pttt("bill[pttt]");
                    // $pttt = $donhang["pttt"];

                    $countsp = loadall_cart_count($bill['ma_donhang']);

                    $suadh = "index.php?act=suadh&ma_donhang=" . $ma_donhang;
                    $xoadh = "index.php?act=xoadh&ma_donhang=" . $ma_donhang;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>DAM-' . $bill['ma_donhang'] . '</td>
                    <td>' . $kh . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . $bill["ngaydathang"] . '</td>
                    <td><strong>$' . $bill['tong'] . '</strong></td>
                    <td>' . $ttdh . '</td> <br>
                    <td><a href="' . $suadh . '"><input type="button" value="Sửa"></a> <a href="' . $xoadh . '"><input type="button" value="Xóa"></a></td>
                    
                </tr>
';
                }
                ?>


            </table>
            </div>
</section>