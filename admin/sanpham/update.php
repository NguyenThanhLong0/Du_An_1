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
        
        <select name="ma_danh_muc_nam" id="">
          <option value="0" selected>Chọn danh mục Nam<i class="fa-solid fa-caret-down"></i></option>
          <?php
          foreach ($listdanhmuc_nam as $danhmuc_nam) {
            if ($ma_danh_muc_nam == $danhmuc_nam['ma_danhmuc_nam']) $s = "selected";
            else $s = "";
            echo '<option value="' . $danhmuc_nam['ma_danhmuc_nam'] . '" ' . $s . '>' . $danhmuc_nam['ten_danhmuc_nam'] . '</option>';
          }
          ?>
        </select>
        <select name="ma_danh_muc_nu" id="">
          <option value="0" selected>Chọn danh mục Nữ<i class="fa-solid fa-caret-down"></i></option>
          <?php
          foreach ($listdanhmuc_nu as $danhmuc_nu) {
            if ($ma_danh_muc_nu == $danhmuc_nu['ma_danhmuc_nu']) $s = "selected";
            else $s = "";
            echo '<option value="' . $danhmuc_nu['ma_danhmuc_nu'] . '" ' . $s . '>' . $danhmuc_nu['ten_danhmuc_nu'] . '</option>';
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