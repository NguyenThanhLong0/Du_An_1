<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Thêm mới Màu sắc</h1>
  </div><div class="divkhung2">
  <div class="fromaddm">
    <form action="index.php?act=addms" method="post">
      <div class="form-group">
        Mã màu sắc: <br>
        <input type="text" name="ma_mausac" id="" disabled placeholder="Mã tự động tăng">
      </div>
      <div class="form-group">
        Tên màu sắc: <br>
        <input type="text" name="ten_mausac" id="" placeholder="Nhập tên danh mục">
        <span style="color: red"><?= isset($error['ten_mausac']) ? $error['ten_mausac'] : ''  ?></span>
      </div>
      <div class="form-group">
        <input type="submit" value="Thêm mới" name="themmoi">
        <input type="reset" value="Nhập lại" />
        <a href="index.php?act=listms"><input type="button" value="Danh sách"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo '<p style="color: red">' . $thongbao; '</p>' ?>
    </form>
  </div></div>
</section>
<!-- end thêm danh mục -->