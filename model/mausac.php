<?php

function insert_mausac($ten_mausac)
{
    $sql = "INSERT INTO mausac(ten_mausac) VALUES('$ten_mausac')";
    pdo_execute($sql);
}

// Hàm tải tất cả các màu sắc từ cơ sở dữ liệu
function loadall_mausac()
{
    $sql = "SELECT * FROM mausac ORDER BY ma_mausac DESC"; // Đổi tên bảng và cột tương ứng
    $listmausac = pdo_query($sql);
    return $listmausac;
}




// Hàm tải thông tin của một màu sắc dựa trên mã màu
function loadone_mausac($ma_mausac)
{
    $sql = "SELECT * FROM mau_sac WHERE ma_mausac = $ma_mausac";
    $mausac = pdo_query_one($sql);
    return $mausac;
}

// Hàm tải tên của một màu sắc dựa trên mã màu
function load_ten_color($ma_mausac)
{
    if ($ma_mausac > 0) {
        $sql = "SELECT ten_mausac FROM mau_sac WHERE ma_mausac = $ma_mausac";
        $color = pdo_query_one($sql);
        return $color['ten_mausac'];
    } else {
        return "";
    }
}