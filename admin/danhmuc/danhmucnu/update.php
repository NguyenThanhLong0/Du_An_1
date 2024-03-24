<?php
if (is_array($dm_nu)) {
  extract($dm_nu);
}
?>
<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Cập nhật danh mục</h1>
  </div>
  <div class="divkhung2">
    <form action="index.php?act=updatedm_nu" method="post">
      <div class="form-group">
        Mã Danh mục <br>
        <input type="text" name="ma_danhmuc_nu" disabled>
      </div>
      <div class="form-group">
        Tên Danh mục <br>
        <input type="text" name="ten_danhmuc_nu" value="<?php if (isset($ten_danhmuc_nu) && ($ten_danhmuc_nu != "")) echo $ten_danhmuc_nu; ?>">

      </div>
      <div class="form-group">
        <input type="hidden" name="ma_danhmuc_nu" value="<?php if (isset($ma_danhmuc_nu) && ($ma_danhmuc_nu > 0)) echo $ma_danhmuc_nu; ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listdm_nu"><input type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao; ?>
    </form>
  </div>
</section>
<!-- end thêm danh mục -->