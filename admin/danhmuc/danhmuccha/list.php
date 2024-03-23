<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách danh mục</h1>
    </div>
    <div class="khungtables">
    <table class="table">
        <tr>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Thao tác</th>
        </tr>
        <?php
        foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            $suadm = "index.php?act=suadm&ma_danhmuc=" . $ma_danhmuc;
            $xoadm = "index.php?act=xoadm&ma_danhmuc=" . $ma_danhmuc;
            echo '<tr>
                            <td>' . $ma_danhmuc . '</td>
                            <td>' . $ten_danhmuc . '</td>
                            <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a> <a href="' . $xoadm . '"><input type="button" value="Xóa"></a> <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" /></a></td>
                        </tr>';
        }
        ?>
    </table></div>
</section>
<!-- end thêm danh mục -->