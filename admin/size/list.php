<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách Size</h1>
    </div>
    <div class="form-group">
        <a href="index.php?act=addsize"><input type="button" value="Thêm"></a>
    </div>
    <div class="khungtables">
    <table class="table">
        <tr>
            <th>Mã Size</th>
            <th>Tên Size</th>
            <th>Thao tác</th>
        </tr>
        <?php
        foreach ($listsize as $size) {
            extract($size);
            $suasize = "index.php?act=suasize&ma_size=" . $ma_size;
            $xoasize = "index.php?act=xoasize&ma_size=" . $ma_size;
            echo '<tr>
                            <td>' . $ma_size . '</td>
                            <td>' . $ten_size . '</td>
                            <td><a href="' . $suasize . '"><input type="button" value="Sửa"></a> <a href="' . $xoasize . '"><input type="button" value="Xóa"></a></td>
                        </tr>';
        }
        ?>
    </table></div>
</section>
<!-- end thêm danh mục -->