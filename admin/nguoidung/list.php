<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách Người dùng</h1>
    </div>
    <div class="form-group">
        <a href="index.php?act=add_nguoidung"><input type="button" value="Nhập thêm" /></a>
    </div>
    <div class="khungtables">

        <table class="table">
            <tr>
                <th>Mã người dùng</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Tài khoản</th>
                <th>Mật Khẩu</th>
                <th>Vai Trò</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($listnguoidung as $nguoidung) {
                extract($nguoidung);
                $suand = "index.php?act=suand&ma_nguoidung=" . $ma_nguoidung;
                $xoand = "index.php?act=xoand&ma_nguoidung=" . $ma_nguoidung;
                echo '<tr>
                            <td>' . $ma_nguoidung . '</td>
                            <td>' . $hoten . '</td>
                            <td>' . $email . '</td>
                            <td>' . $diachi . '</td>
                            <td>' . $sdt . '</td>
                            <td>' . $taikhoan . '</td>
                            <td>' . $matkhau . '</td>
                            <td>' . $vaitro . '</td>
                            <td><a href="' . $suand . '"><input type="button" value="Sửa"></a> <a href="' . $xoand . '"><input type="button" value="Xóa"></a></td>
                        </tr>';
            }
            ?>
        </table>
    </div>

</section>
<!-- end thêm danh mục -->