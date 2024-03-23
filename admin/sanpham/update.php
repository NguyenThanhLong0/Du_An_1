<?php

if (is_array($sanpham)) {
  extract($sanpham);
}

$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
  $hinh = "<img src = '" . $hinhpath . "' height = '80' >";
} else {
  $hinh = "no photo";
}
?>

<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Cập nhật sản phẩm</h1>
  </div>
  <div class="divkhungaddsp">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="form-group">
        Danh mục con <br>
        <select name="ma_danh_muc_con" id="">
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listdanhmuc_con as $danhmuccon) {
            if ($ma_danh_muc_con == $danhmuccon['ma_danhmuc_con']) $s = "selected";
            else $s = "";
            echo '<option value="' . $danhmuccon['ma_danhmuc_con'] . '" ' . $s . '>' . $danhmuccon['ten_danhmuc_con'] . '</option>';
          }
          ?>
        </select>
      </div>

      <div class="khungformaddsp"></div>
      <div class="form-group">
        Tên sản phẩm <br>
        <input type="text" name="ten_sanpham" value="<?= $ten_sanpham; ?>">
      </div>
      <div class="form-group ">
        Hình<br>
        <input type="file" name="hinh"><br>
        <?= $hinh; ?>
      </div>
      <div class="form-group ">
        Giá sản phẩm<br>
        <input type="text" name="gia_sanpham" value="<?= $gia_sanpham; ?>"><br>
      </div>
      <div class="form-group">
        Mô tả <br>
        <textarea name="mota" cols="66" rows="10">
        <?= $mota; ?>
        </textarea>
      </div>
      <div class="form-group ">
        <input type="hidden" name="ma_sanpham" value="<?= $ma_sanpham; ?>">
        <input type="submit" name="update" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao; ?>
    </form>
  </div>
</section>
<!-- end thêm danh mục -->