<?php
if (is_array($size)) {
  extract($size);
}
?>
<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Cập nhật Size</h1>
  </div>
  <div class="divkhung2">
    <form action="index.php?act=updatesize" method="post">
      <div class="form-group">
        Mã Size <br>
        <input type="text" name="ma_size" disabled>
      </div>
      <div class="form-group">
        Tên Size <br>
        <input type="text" name="ten_size" value="<?php if (isset($ten_size) && ($ten_size != "")) echo $ten_size; ?>">

      </div>
      <div class="form-group">
        <input type="hidden" name="ma_size" value="<?php if (isset($ma_size) && ($ma_size > 0)) echo $ma_size; ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listsize"><input type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao; ?>
    </form>
  </div>
</section>
<!-- end thêm danh mục -->