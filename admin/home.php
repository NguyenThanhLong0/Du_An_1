<?php 
$tongdoanhthu = tong_doanhthu();
?>
<div class="cards"><a href="index.php?act=listdh">
    <div class="card red">
        <p class="tip">Tổng doanh thu</p>
        
        <p class="tip"><?php echo number_format($tongdoanhthu[0]["SUM(tong)"], 0, ",", ".") ?></p>
        
    </div></a>
    <div class="card blue">
        <p class="tip">Hover Me</p>
        
        <p class="second-text">Lorem Ipsum</p>
    </div>
    <div class="card green">
        <p class="tip">Hover Me</p>
        <p class="second-text">Lorem Ipsum</p>
    </div>
</div>