<?php
if (is_array($nguoidung)) {
  extract($nguoidung);
}
?>
<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Cập nhật Người dùng</h1>
  </div>
  <div class="divkhung2">
    <form action="index.php?act=update_nguoidung" method="post">
      <div class="form-group">
        Mã Người dùng <br>
        <input type="text" name="ma_nguoidung" disabled>
      </div>
      <div class="form-group">
        Họ tên <br>
        <input type="text" name="hoten" value="<?php if (isset($hoten) && ($hoten != ""))
                                                  echo $hoten; ?>">
      </div>

      <div class="form-group">
        Email <br>
        <input type="text" name="email" value="<?php if (isset($email) && ($email != ""))
                                                  echo $email; ?>">
      </div>
      <div class="form-group">
        Địa chỉ <br>
        <input type="text" name="diachi" value="<?php if (isset($diachi) && ($diachi != ""))
                                                  echo $diachi; ?>">
      </div>
      <div class="form-group">
        Tài Khoản <br>
        <input type="text" name="taikhoan" value="<?php if (isset($taikhoan) && ($taikhoan != ""))
                                                echo $taikhoan; ?>">
      </div>
      <div class="form-group">
        Mật khẩu <br>
        <input type="password" name="matkhau" value="<?php if (isset($matkhau) && ($matkhau != ""))
                                                echo $matkhau; ?>">
      </div>
      <div class="form-group">
        Vai trò <br>
        <input type="text" name="vaitro" value="<?php if (isset($vaitro) && ($vaitro != ""))
                                                echo $vaitro; ?>">
      </div>
      <div class="form-group">
        <input type="hidden" name="ma_nguoidung" value="<?php if (isset($ma_nguoidung) && ($ma_nguoidung > 0))
                                                echo $ma_nguoidung; ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao; ?>
    </form>
  </div>
</section>
<!-- end thêm danh mục -->