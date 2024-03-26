<?php
function insert_sanpham($ten_sanpham, $hinh, $gia_sanpham, $mota, $ma_danh_muc_nam, $ma_danh_muc_nu)
{
    $sql = "INSERT INTO sanpham (ten_sanpham,hinh,gia_sanpham,mota,ma_danh_muc_nam,ma_danh_muc_nu) VALUES ('$ten_sanpham','$hinh','$gia_sanpham','$mota','$ma_danh_muc_nam','$ma_danh_muc_nu')";
    pdo_execute($sql);
}
function insert_sanpham1($ten_sanpham, $hinh, $gia_sanpham, $mota, $ma_danh_muc_nam, $ma_danh_muc_nu) {
    if ($ma_danh_muc_nam > 0) {
        $sql = "INSERT INTO sanpham (ten_sanpham,hinh,gia_sanpham,mota,ma_danh_muc_nam,) VALUES ('$ten_sanpham','$hinh','$gia_sanpham','$mota','$ma_danh_muc_nam')";
        pdo_execute($sql);
    } else {
        $sql = "INSERT INTO sanpham (ten_sanpham,hinh,gia_sanpham,mota,ma_danh_muc_nu,) VALUES ('$ten_sanpham','$hinh','$gia_sanpham','$mota','$ma_danh_muc_nu')";
        pdo_execute($sql);
    }
}
function delete_sanpham($ma_sanpham)
{
    $sql = "DELETE FROM sanpham WHERE ma_sanpham=" . $ma_sanpham;
    pdo_execute($sql);
}

// load lại list danh sách
function loadall_sanpham($kyw = "", $ma_danh_muc_nam = 0, $ma_danh_muc_nu = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($kyw != "") {
        $sql .= " AND ten_sanpham LIKE '%" . $kyw . "%'";
    }
    if ($ma_danh_muc_nam > 0) {
        $sql .= " AND ma_danh_muc_nam ='" . $ma_danh_muc_nam . "'";
    }
    if($ma_danh_muc_nu > 0) {
        $sql .= " AND ma_danh_muc_nu ='" . $ma_danh_muc_nu . "'";
    }
    $sql .= " ORDER BY ma_sanpham DESC";
    $listsanpham = pdo_query($sql);  // Giả sử pdo_query là hàm thực hiện truy vấn SQL
    return $listsanpham;
}


function loadall_sanpham_nam($kyw = "", $ma_danh_muc_nam = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($kyw != "") {
        $sql .= " and ten_sanpham like '%" . $kyw . "%'";
    }
    if ($ma_danh_muc_nam > 0) {
        $sql .= " and ma_danh_muc_nam ='" . $ma_danh_muc_nam . "'";
    }
    $sql .= " order by ma_sanpham desc";
    $listsanpham_nam = pdo_query($sql);
    return $listsanpham_nam;
}
function loadall_sanpham_nu($kyw = "", $ma_danh_muc_nu = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($kyw != "") {
        $sql .= " and ten_sanpham like '%" . $kyw . "%'";
    }
    if ($ma_danh_muc_nu > 0) {
        $sql .= " and ma_danh_muc_nu ='" . $ma_danh_muc_nu . "'";
    }
    $sql .= " order by ma_sanpham desc";
    $listsanpham_nu = pdo_query($sql);
    return $listsanpham_nu;
}
function loadall_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 order by ma_sanpham desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function load_ten_dm_nam( $ma_danh_muc_nam)
{
    if ($ma_danh_muc_nam > 0) {
        $sql = "SELECT * FROM danhmuc_nam WHERE ma_danhmuc_nam =" . $ma_danh_muc_nam;
        
        $dm_nam = pdo_query_one($sql);
        extract($dm_nam);
        return $ten_danhmuc_nam;
    } else {
        return "";
    }
}
function load_ten_dm_nu( $ma_danh_muc_nu)
{
    if ($ma_danh_muc_nu > 0) {
        $sql = "SELECT * FROM danhmuc_nu WHERE ma_danhmuc_nu =" . $ma_danh_muc_nu;
        
        $dm_nu = pdo_query_one($sql);
        extract($dm_nu);
        return $ten_danhmuc_nu;
    } else {
        return "";
    }
}


function loadone_sanpham($ma_sanpham)
{
    $sql = "SELECT * FROM sanpham WHERE ma_sanpham =" . $ma_sanpham;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($ma_sanpham, $ma_danh_muc_nam, $ma_danh_muc_nu)
{
    $sql = "SELECT * FROM sanpham WHERE ma_danh_muc_nam=" . $ma_danh_muc_nam . " AND ma_danh_muc_nu=" . $ma_danh_muc_nu . " AND ma_sanpham <>" . $ma_sanpham;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($ma_sanpham, $ten_sanpham, $gia_sanpham, $mota, $hinh, $ma_danh_muc_nam , $ma_danh_muc_nu )
{
    if ($hinh != "") {
        $sql = "UPDATE sanpham SET ma_danh_muc_nam='" . $ma_danh_muc_nam . "',ma_danh_muc_nu='" . $ma_danh_muc_nu . "', ten_sanpham='" . $ten_sanpham . "',gia_sanpham='" . $gia_sanpham . "', mota='" . $mota . "', hinh='" . $hinh . "' WHERE ma_sanpham=" . $ma_sanpham;
    } else {
        $sql = "UPDATE sanpham SET ma_danh_muc_nam='" . $ma_danh_muc_nam . "',ma_danh_muc_nu='" . $ma_danh_muc_nu . "', ten_sanpham='" . $ten_sanpham . "',gia_sanpham='" . $gia_sanpham . "', mota='" . $mota . "' WHERE ma_sanpham=" . $ma_sanpham;
    }
    pdo_execute($sql);
}

function loadall_sanpham_top10()
{
    $sql = "SELECT * FROM sanpham WHERE 1 order by luotxem desc limit 0,12";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


?>