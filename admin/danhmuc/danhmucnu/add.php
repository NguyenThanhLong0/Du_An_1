<!-- thêm danh mục -->
<section class="khungaddm">
  <div class="tieude">
    <h1>Thêm mới danh mục "Nữ"</h1>
  </div>
  <div class="divkhung2">
    <div class="fromaddm">
      <form action="index.php?act=adddm_nu" method="post">
        <div class="form-group">
          Mã danh mục Nữ: <br>
          <input type="text" name="ma_danhmuc_nu" id="" disabled placeholder="Mã tự động tăng">
        </div>
        <div class="form-group">
          Tên danh mục Nữ: <br>
          <input type="text" name="ten_danhmuc_nu" id="" placeholder="Nhập tên danh mục">
          <span style="color: red"><?= isset($error['ten_danhmuc_nu']) ? $error['ten_danhmuc_nu'] : ''  ?></span>
        </div>
        <div class="form-group">
          <input type="submit" value="Thêm mới" name="themmoi">
          <input type="reset" value="Nhập lại" />
          <a href="index.php?act=listdm_nu"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
          echo '<p style="color: red">' . $thongbao;
        '</p>' ?>
      </form>
    </div>
  </div>
</section>
<!-- end thêm danh mục -->