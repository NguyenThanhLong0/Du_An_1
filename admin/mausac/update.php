<?php
if (is_array($dm)) {
  extract($dm);
}
?>
<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Cập nhật danh mục</h1>
  </div>
  <div class="divkhung2">
    <form action="index.php?act=updatedm" method="post">
      <div class="form-group">
        Mã Danh mục <br>
        <input type="text" name="ma_danhmuc" disabled>
      </div>
      <div class="form-group">
        Tên Danh mục <br>
        <input type="text" name="ten_danhmuc" value="<?php if (isset($ten_danhmuc) && ($ten_danhmuc != "")) echo $ten_danhmuc; ?>">

      </div>
      <div class="form-group">
        <input type="hidden" name="ma_danhmuc" value="<?php if (isset($ma_danhmuc) && ($ma_danhmuc > 0)) echo $ma_danhmuc; ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao; ?>
    </form>
  </div>
</section>
<!-- end thêm danh mục -->