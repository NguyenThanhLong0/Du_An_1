<?php
if (is_array($mausac)) {
  extract($mausac);
}
?>
<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Cập nhật màu sắc</h1>
  </div>
  <div class="divkhung2">
    <form action="index.php?act=updatems" method="post">
      <div class="form-group">
        Mã màu sắc <br>
        <input type="text" name="ma_mausac" disabled>
      </div>
      <div class="form-group">
        Tên màu sắc <br>
        <input type="text" name="ten_mausac" value="<?php if (isset($ten_mausac) && ($ten_mausac != "")) echo $ten_mausac; ?>">

      </div>
      <div class="form-group">
        <input type="hidden" name="ma_mausac" value="<?php if (isset($ma_mausac) && ($ma_mausac > 0)) echo $ma_mausac; ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listms"><input type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao; ?>
    </form>
  </div>
</section>
<!-- end thêm danh mục -->