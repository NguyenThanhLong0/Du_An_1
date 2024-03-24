<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách sản phẩm</h1>
    </div>
    <div class="form-group">
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw" placeholder="Tìm kiếm" id="">
            <select  class="select" name="ma_danh_muc_nam">
                <option value="0" selected>Tất cả DM Nam</option>
                <?php
                foreach ($listdanhmuc_nam as $danhmucnam) {
                    extract($danhmucnam);
                    echo '<option value="' . $ma_danhmuc_nam . '">' . $ten_danhmuc_nam . '</option>';
                }
                ?>
            </select>
            <select  class="select" name="ma_danh_muc_nu">
                <option value="0" selected>Tất cả DM Nữ</option>
                <?php
                foreach ($listdanhmuc_nu as $danhmucnu) {
                    extract($danhmucnu);
                    echo '<option value="' . $ma_danhmuc_nu . '">' . $ten_danhmuc_nu . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="listok" value="Tìm kiếm">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a>
        </form>
    </div>
    <div class="khungtables">
        <table class="table">
            <tr>
                <th>Mã Sản phẩm</th>
                <th>Tên sản phẩm </th>
                <th>Hình</th>
                <th>Giá sản phẩm</th>
                <th>Mô tả</th>
                <th>Lượt xem</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&ma_sanpham=" . $ma_sanpham;
                $xoasp = "index.php?act=xoasp&ma_sanpham=" . $ma_sanpham;
                $hinhpath = "../upload/" . $hinh;
                if (is_file($hinhpath)) {
                    $hinh = "<img src = '" . $hinhpath . "' height = '130' >";
                } else {
                    $hinh = "no photo";
                }
                echo '<tr>
                            <td>' . $ma_sanpham . '</td>
                            <td>' . $ten_sanpham . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $gia_sanpham . '</td>
                            <td>' . $mota . '</td>
                            <td>' . $luotxem . '</td>
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a> <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                        </tr>';
            }
            ?>

        </table>
    </div>
</section>
<!-- end thêm danh mục -->