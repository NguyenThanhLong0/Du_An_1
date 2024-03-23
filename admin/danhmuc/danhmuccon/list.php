<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách danh mục</h1>
    </div>
    <div class="khungtables">
        <div class="form-group">
            <form action="index.php?act=listdm_con" method="post">
                <input type="text" name="kyw" placeholder="Tìm kiếm" id="">
                <select name="ma_danhmuc_cha" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $ma_danhmuc . '">' . $ten_danhmuc . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="listok" value="Tìm kiếm">
                <a href="index.php?act=adddm_con"><input type="button" value="Nhập thêm" /></a>
            </form>
        </div>
        <table class="table">
            <tr>
                <th>Mã danh con</th>
                <th>Tên danh mục</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($listdanhmuc_con as $danhmuccon) {
                extract($danhmuccon);
                $suadm_con = "index.php?act=suadm_con&ma_danhmuc_con=" . $ma_danhmuc_con;
                $xoadm_con = "index.php?act=xoadm_con&ma_danhmuc_con=" . $ma_danhmuc_con;
                echo '<tr>
                            <td>' . $ma_danhmuc_con . '</td>
                            <td>' . $ten_danhmuc_con . '</td>
                            <td><a href="' . $suadm_con . '"><input type="button" value="Sửa"></a> <a href="' . $xoadm_con . '"><input type="button" value="Xóa"></a> </td>
                        </tr>';
            }
            ?>
        </table>
    </div>
</section>
<!-- end thêm danh mục -->