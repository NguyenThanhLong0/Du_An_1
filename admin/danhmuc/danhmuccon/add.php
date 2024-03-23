<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Thêm mới danh mục Con</h1>
  </div><div class="divkhung2">
  <div class="fromaddm">
    <form action="index.php?act=adddm_con" method="post">
    <div class="form-group">
                    Danh mục cha <br>
                    <select class="select" name="ma_danhmuc_cha">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $ma_danhmuc . '">' . $ten_danhmuc . '</option>';
                        }
                        ?>
                    </select>
                </div>
      <div class="form-group">
        Mã danh mục con: <br>
        <input type="text" name="ma_danhmuc_con" id="" disabled placeholder="Mã tự động tăng">
      </div>
      <div class="form-group">
        Tên danh mục con: <br>
        <input type="text" name="ten_danhmuc_con" placeholder="Nhập tên danh mục">
        <span style="color: red"><?= isset($error['ten_danhmuc_con']) ? $error['ten_danhmuc_con'] : ''  ?></span>
      </div>
      <div class="form-group">
        <input type="submit" value="Thêm mới" name="themmoi">
        <input type="reset" value="Nhập lại" />
        <a href="index.php?act=listdm_con"><input type="button" value="Danh sách"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo '<p style="color: red">' . $thongbao; '</p>' ?>
    </form>
  </div></div>
</section>
<!-- end thêm danh mục -->