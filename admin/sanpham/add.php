<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <div class="divkhungaddsp">
        <div class="fromaddm">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    Danh mục Nam <br>
                    <select class="select" name="ma_danh_muc_nam">
                    <option value="0" selected>chưa được chọn</option>
                        <?php
                        foreach ($listdanhmuc_nam as $danhmuc_nam) {
                            extract($danhmuc_nam);
                            echo '<option value="' . $ma_danhmuc_nam . '">' . $ten_danhmuc_nam . '</option>';
                        }
                        ?>
                    </select><br>
                    Danh mục Nữ <br>
                    <select class="select" name="ma_danh_muc_nu">
                    <option value="0" selected>chưa được chọn</option>
                        <?php
                        foreach ($listdanhmuc_nu as $danhmuc_nu) {
                            extract($danhmuc_nu);
                            echo '<option value="' . $ma_danhmuc_nu . '">' . $ten_danhmuc_nu . '</option>';
                        }
                        ?>
                    </select><br>
                    
                </div>
                <div class="form-group">
                    Mã sản phẩm: <br>
                    <input type="text" name="ma_sanpham" id="" placeholder="Mã tự động tăng" disabled>
                </div>
                <div class="form-group">
                    Tên sản phẩm: <br>
                    <input type="text" name="ten_sanpham" id="" placeholder="Nhập tên danh mục">
                    <span style="color: red"><?= isset($error['ten_sanpham']) ? $error['ten_sanpham'] : ''  ?></span>
                </div>
                <div class="form-group">
                    Giá sản phẩm: <br>
                    <input type="number" min="1" name="gia_sanpham" id="" placeholder="Nhập giá sản phẩm">
                    <span style="color: red"><?= isset($error['gia_sanpham']) ? $error['gia_sanpham'] : ''  ?></span>
                </div>
                <div class="form-group">
                    Hình sản phẩm: <br>
                    <input type="file" name="hinh">
                    
                    <span style="color: red"><?= isset($error['hinh']) ? $error['hinh'] : ''  ?></span>
                </div>
                <div class="form-group">
                    Mô tả<br>
                    <textarea name="mota" cols="66" rows="10"></textarea>
                    <span style="color: red"><?= isset($error['mota']) ? $error['mota'] : ''  ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" value="Thêm mới" name="themmoi">
                    <input type="reset" value="Nhập lại" />
                    <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo '<p style="color: red">' . $thongbao;
                '</p>' ?>
            </form>
        </div>
    </div>
</section>
<!-- end thêm danh mục -->