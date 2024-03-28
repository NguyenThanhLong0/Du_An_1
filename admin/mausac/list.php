<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách màu sắc</h1>
    </div>
    <div class="khungtables">
    <table class="table">
        <tr>
            <th>Mã màu sắc</th>
            <th>Tên màu sắc</th>
            <th>Thao tác</th>
        </tr>
        <?php
        foreach ($listms as $mausac) {
            extract($mausac);
            $suams = "index.php?act=suams&ma_mausac=" . $ma_mausac;
            $xoams = "index.php?act=xoams&ma_mausac=" . $ma_mausac;
            echo '<tr>
                            <td>' . $ma_mausac . '</td>
                            <td>' . $ten_mausac . '</td>
                            <td><a href="' . $suams . '"><input type="button" value="Sửa"></a> <a href="' . $xoams . '"><input type="button" value="Xóa"></a> <a href="index.php?act=addms"><input type="button" value="Nhập thêm" /></a></td>
                        </tr>';
        }
        ?>
    </table></div>
</section>
<!-- end thêm danh mục -->