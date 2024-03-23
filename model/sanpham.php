<?php
function insert_sanpham($ten_sanpham, $hinh, $gia_sanpham, $mota,$ma_danh_muc_con)
{
    $sql = "INSERT INTO sanpham (ten_sanpham,hinh,gia_sanpham,mota,ma_danh_muc_con) VALUES ('$ten_sanpham','$hinh','$gia_sanpham','$mota','$ma_danh_muc_con')";
    pdo_execute($sql);
}

function delete_sanpham($ma_sanpham)
{
    $sql = "DELETE FROM sanpham WHERE ma_sanpham=" . $ma_sanpham;
    pdo_execute($sql);
}

// load lại list danh sách
function loadall_sanpham($kyw = "", $ma_danh_muc_con = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($kyw != "") {
        $sql .= " and ten_sanpham like '%" . $kyw . "%'";
    }
    if ($ma_danh_muc_con > 0) {
        $sql .= " and ma_danh_muc_con ='" . $ma_danh_muc_con . "'";
    }
    $sql .= " order by ma_sanpham desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 order by ma_sanpham desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function load_ten_dm($ma_danh_muc)
{
    if ($ma_danh_muc >0) {
        $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc =" . $ma_danh_muc;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_danhmuc;
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
function load_sanpham_cungloai($ma_sanpham, $ma_danh_muc)
{
    $sql = "SELECT * FROM sanpham WHERE ma_danh_muc=" . $ma_danh_muc . " AND ma_sanpham <>" . $ma_sanpham;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($ma_sanpham, $ten_sanpham,$gia_sanpham, $mota, $hinh,$ma_danh_muc_con)
{
    if ($hinh != "") {
        $sql = "UPDATE sanpham SET ma_danh_muc_con='" . $ma_danh_muc_con . "', ten_sanpham='" . $ten_sanpham . "',gia_sanpham='" . $gia_sanpham . "', mota='" . $mota . "', hinh='" . $hinh . "' WHERE ma_sanpham=" . $ma_sanpham;
    } else {
        $sql = "UPDATE sanpham SET ma_danh_muc_con='" . $ma_danh_muc_con . "',ten_sanpham='" . $ten_sanpham . "',gia_sanpham='" . $gia_sanpham . "', mota='" . $mota . "' WHERE ma_sanpham=" . $ma_sanpham;
    }
    pdo_execute($sql);
}


?>