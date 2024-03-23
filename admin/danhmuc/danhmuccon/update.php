<?php
if (is_array($dm_con)) {
  extract($dm_con);
}
?>
<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Cập nhật danh mục Con</h1>
  </div>
  <div class="divkhung2">
    <form action="index.php?act=updatedm_con" method="post" enctype="multipart/form-data">
      
      <div class="form-group">
        <select name="ma_danhmuc_cha" id="">
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            if ($ma_danhmuc_cha == $danhmuc['ma_danhmuc']) $s="selected"; else $s="";
              echo '<option value="'.$danhmuc['ma_danhmuc'].'" '.$s.'>' . $danhmuc['ten_danhmuc'] . '</option>';
          }
          ?>
        </select>
      </div>

      <div class="form-group">
        Mã Danh mục con <br>
        <input type="text" name="ma_danhmuc_con" disabled>
      </div>
      <div class="form-group">
        Tên Danh mục con <br>
        <input type="text" name="ten_danhmuc_con" value="<?php if (isset($ten_danhmuc_con) && ($ten_danhmuc_con != "")) echo $ten_danhmuc_con; ?>">

      </div>
      <div class="form-group">
        <input type="hidden" name="ma_danhmuc_con" value="<?php if (isset($ma_danhmuc_con) && ($ma_danhmuc_con > 0)) echo $ma_danhmuc_con; ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listdm_con"><input type="button" value="DANH SÁCH DANH MUC CON"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao; ?>
    </form>
  </div>
</section>
<!-- end thêm danh mục -->