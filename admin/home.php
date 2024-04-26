<?php
$tongdoanhthu = tong_doanhthu();
$tongsanpham = tong_sanpham();
$tongdonhang = tong_donhang();
$tongtaikhoan = tong_taikhoan();
$tongbinhluan = tong_binhluan();
?>

<div class="khungslide_home">
    <div class="cards">
        <!-- <a href="index.php?act=listdh">
            <div class="card red">
                <p class="tip">Tổng doanh thu</p>
                <p class="tip"><?php echo number_format($tongdoanhthu[0]["SUM(tong)"], 0, ",", ".") ?></p>
            </div>
        </a> -->
        <a href="index.php?act=listsp">
            <div class="card red">
                <p class="tip">Tổng sản phẩm</p>
                <p class="tip"> <?php echo $tongsanpham ?></p>
            </div>
        </a>
        <a href="index.php?act=listdh">
            <div class="card blue">
                <p class="tip">Tổng đơn hàng</p>
                <p class="tip"><?php echo $tongdonhang ?></p>
            </div>
        </a>
        <a href="index.php?act=dsbl">
            <div class="card green">
                <p class="tip">Số lượng bình luận</p>
                <p class="tip">
                    <?php echo $tongbinhluan ?>
                </p>
            </div>
        </a>
        <a href="index.php?act=dskh">
            <div class="card red">
                <p class="tip">số lượng tài khoản</p>
                <p class="tip"><?php echo $tongtaikhoan ?></p>
            </div>
        </a>

    </div>
</div>