<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Thêm mới Người dùng</h1>
  </div><div class="divkhung2">
  <div class="fromaddm">
    <form action="index.php?act=add_nguoidung" method="post">
      <div class="form-group">
        Mã Người dùng: <br>
        <input type="text" name="ma_nguoidung" id="" disabled placeholder="Mã tự động tăng">
      </div>
      <div class="form-group">
        Họ tên: <br>
        <input type="text" name="hoten" id="" placeholder="Nhập họ tên người dùng">
        <span style="color: red"><?= isset($error['hoten']) ? $error['hoten'] : ''  ?></span>
      </div>
      <div class="form-group">
        Email: <br>
        <input type="text" name="email" id="" placeholder="Nhập Email">
        <span style="color: red"><?= isset($error['email']) ? $error['email'] : ''  ?></span>
      </div>
      <div class="form-group">
        Đia chỉ: <br>
        <input type="text" name="diachi" id="" placeholder="Nhập địa chỉ">
        <span style="color: red"><?= isset($error['diachi']) ? $error['diachi'] : ''  ?></span>
      </div>
      <div class="form-group">
        Số điện thoại: <br>
        <input type="text" name="sdt" id="" placeholder="Nhập số điện thoại">
        <span style="color: red"><?= isset($error['sdt']) ? $error['sdt'] : ''  ?></span>
      </div>
      <div class="form-group">
        Tài khoản: <br>
        <input type="text" name="taikhoan" id="" placeholder="Nhập tài khoản">
        <span style="color: red"><?= isset($error['taikhoan']) ? $error['taikhoan'] : ''  ?></span>
      </div>
      <div class="form-group">
        Mật Khẩu: <br>
        <input type="password" name="matkhau" id="" placeholder="Nhập mật khẩu">
        <span style="color: red"><?= isset($error['matkhau']) ? $error['matkhau'] : ''  ?></span>
      </div>
      <div class="form-group">
        Vai Trò: Admin = 1 / Người dùng= 0<br>
        <input type="number" name="vaitro" min="0" id="" max="1" placeholder="Admin = 1 / Người dùng = 0">
        <span style="color: red"><?= isset($error['vaitro']) ? $error['vaitro'] : ''  ?></span>
      </div>
      <div class="form-group">
        <input type="submit" value="Thêm mới" name="themmoi">
        <input type="reset" value="Nhập lại" />
        <a href="index.php?act=dskh"><input type="button" value="Danh sách "></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo '<p style="color: red">' . $thongbao; '</p>' ?>
    </form>
  </div></div>
</section>
<!-- end thêm danh mục -->