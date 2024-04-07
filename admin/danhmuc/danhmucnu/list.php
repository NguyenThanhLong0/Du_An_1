<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách danh mục Nữ</h1>
    </div>
    <div class="form-group">
        </a> <a href="index.php?act=adddm_nu"><input type="button" value="Nhập thêm" /></a>
    </div>
    <div class="khungtables">

        <table class="table">
            <tr>
                <th>Mã danh mục Nữ</th>
                <th>Tên danh mục Nữ</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($listdanhmuc_nu as $danhmuc_nu) {
                extract($danhmuc_nu);
                $suadm_nu = "index.php?act=suadm_nu&ma_danhmuc_nu=" . $ma_danhmuc_nu;
                $xoadm_nu = "index.php?act=xoadm_nu&ma_danhmuc_nu=" . $ma_danhmuc_nu;
                echo '<tr>
                            <td>' . $ma_danhmuc_nu . '</td>
                            <td>' . $ten_danhmuc_nu . '</td>
                            <td><a href="' . $suadm_nu . '"><input type="button" value="Sửa"></a> <a href="' . $xoadm_nu . '"><input type="button" value="Xóa"></td>
                        </tr>';
            }
            ?>
        </table>
    </div>
</section>
<!-- end thêm danh mục -->