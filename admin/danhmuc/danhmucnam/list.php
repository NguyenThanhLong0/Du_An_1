<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách danh mục Nam</h1>
    </div>
    <div class="form-group">
        <a href="index.php?act=adddm_nam"><input type="button" value="Nhập thêm" /></a>
    </div>
    <div class="khungtables">
        <table class="table">
            <tr>
                <th>Mã danh mục Nam</th>
                <th>Tên danh mục Nam</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($listdanhmuc_nam as $danhmuc_nam) {
                extract($danhmuc_nam);
                $suadm_nam = "index.php?act=suadm_nam&ma_danhmuc_nam=" . $ma_danhmuc_nam;
                $xoadm_nam = "index.php?act=xoadm_nam&ma_danhmuc_nam=" . $ma_danhmuc_nam;
                echo '<tr>
                            <td>' . $ma_danhmuc_nam . '</td>
                            <td>' . $ten_danhmuc_nam . '</td>
                            <td><a href="' . $suadm_nam . '"><input type="button" value="Sửa"></a> <a href="' . $xoadm_nam . '"><input type="button" value="Xóa"></a> </td>
                        </tr>';
            }
            ?>
        </table>
    </div>
</section>
<!-- end thêm danh mục -->