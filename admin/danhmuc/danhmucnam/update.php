<?php
if (is_array($dm_nam)) {
  extract($dm_nam);
}
?>
<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Cập nhật danh mục nam</h1>
  </div>
  <div class="divkhung2">
    <form action="index.php?act=updatedm_nam" method="post">
      <div class="form-group">
        Mã Danh mục Nam <br>
        <input type="text" name="ma_danhmuc_nam" disabled>
      </div>
      <div class="form-group">
        Tên Danh mục nam <br>
        <input type="text" name="ten_danhmuc_nam" value="<?php if (isset($ten_danhmuc_nam) && ($ten_danhmuc_nam != "")) echo $ten_danhmuc_nam; ?>">

      </div>
      <div class="form-group">
        <input type="hidden" name="ma_danhmuc_nam" value="<?php if (isset($ma_danhmuc_nam) && ($ma_danhmuc_nam > 0)) echo $ma_danhmuc_nam; ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listdm_nam"><input type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao; ?>
    </form>
  </div>
</section>
<!-- end thêm danh mục -->