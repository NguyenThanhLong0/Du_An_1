<?php

if (is_array($donhang)) {
    extract($donhang);
}
?>

<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Cập nhật đơn hàng</h1>
    </div>
    <div class="divkhungaddsp">
        <form action="index.php?act=updatedh" method="post" enctype="multipart/form-data">
            <div class="form-group">

                <!-- <select name="ma_donhang" id="">
                    <option value="0" selected>Chọn loại hàng<i class="fa-solid fa-caret-down"></i></option>
                    <?php
                    foreach ($listdonhang as $donhang) {
                        if ($donhang == $donhang['ma_donhang']) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $donhang['ma_donhang'] . '" ' . $s . '>' . $donhang['ten_donhang'] . '</option>';
                    }
                    ?>
                </select> -->
            </div>

            <div class="khungformaddsp"></div>
            <?php
            $soluong = loadall_cart_count($donhang['ma_donhang']);
            $ttdh = get_ttdh("donhang[trangthai_dh]");
            // $pttt = get_pttt("donhang[pttt]");
            ?>
            <div class="row mb10">
                <div class="form-group">
                    khách hàng<br>
                    <input type="text" name="tenkh" value="<?php if (isset($tenkh) && ($tenkh != "")) echo $tenkh; ?>">
                    <input type="text" name="dc_dh" value="<?php if (isset($dc_dh) && ($dc_dh != "")) echo $dc_dh; ?>">
                    <input type="text" name="sdt_dh" value="<?php if (isset($sdt_dh) && ($sdt_dh != "")) echo $sdt_dh; ?>">
                    <input type="text" name="email_dh" value="<?php if (isset($email_dh) && ($email_dh != "")) echo $email_dh; ?>">
                </div>


                <div class="form-group">
                    Ngày đặt hàng <br>
                    <input type="text" name="ngaydathang" value="<?php if (isset($ngaydathang) && ($ngaydathang != "")) echo $ngaydathang; ?>">
                </div>
                <div class="form-group">
                    Giá trị đơn hàng<br>
                    <input type="text" name="tong" value="<?php if (isset($tong) && ($tong != "")) echo $tong; ?>">
                </div>
                <div class="form-group">
                    Tình trạng đơn hàng <br>
                    <input type="text" name="ttdh" value="<?php if (isset($ttdh) && ($ttdh != "")) echo $ttdh; ?>">
                </div>
            </div>
            <div class="form-group ">
                <input type="hidden" name="ma_donhang" value=" <?php if (isset($ma_donhang) && ($ma_donhang > 0)) echo $ma_donhang; ?>">

                <input type="hidden" name="makh" value="<?= $makh; ?>">
                <input type="submit" name="update" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdh"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao; ?>
        </form>
    </div>
</section>
<!-- end thêm danh mục -->