<?php
function insert_danhmuc_con($ten_danhmuc_con, $ma_danhmuc_cha)
{
    $sql = "INSERT INTO danhmuccon (ten_danhmuc_con,ma_danhmuc_cha) VALUES ('$ten_danhmuc_con','$ma_danhmuc_cha')";
    pdo_execute($sql);
}
function delete_danhmuc_con($ma_danhmuc_con)
{
    $sql = "DELETE FROM danhmuccon WHERE ma_danhmuc_con=" . $ma_danhmuc_con;
    pdo_execute($sql);
}
function loadall_danhmuc_con($kyw = "", $ma_danhmuc_cha = 0)
{
    $sql = "SELECT * FROM danhmuccon WHERE 1";
    if ($kyw != "") {
        $sql .= " and ten_danhmuc_con like '%" . $kyw . "%'";
    }
    if ($ma_danhmuc_cha > 0) {
        $sql .= " and ma_danhmuc_cha ='" . $ma_danhmuc_cha . "'";
    }
    $sql .= " order by ma_danhmuc_con desc";
    $listdanhmuc_con = pdo_query($sql);
    return $listdanhmuc_con;
}
function loadone_danhmuc_con($ma_danhmuc_con)
{
    $sql = "SELECT * FROM danhmuccon WHERE ma_danhmuc_con =" . $ma_danhmuc_con;
    $dm_con = pdo_query_one($sql);
    return $dm_con;
}

function update_danhmuc_con($ma_danhmuc_con, $ten_danhmuc_con, $ma_danhmuc_cha)
{
    $sql = "UPDATE danhmuccon SET ma_danhmuc_cha = '" . $ma_danhmuc_cha . "', ten_danhmuc_con='" . $ten_danhmuc_con . "'  WHERE ma_danhmuc_con=" . $ma_danhmuc_con;
    pdo_execute($sql);
}

// test
function load_ten_dmcon($ma_danh_muc_con)
{
    if ($ma_danh_muc_con >0) {
        $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc =" . $ma_danh_muc_con;
        $dm_con = pdo_query_one($sql);
        extract($dm_con);
        return $ten_danhmuc_con;
    } else {
        return "";
    }
}

?>