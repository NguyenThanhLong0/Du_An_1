<?php
function insert_nguoidung($hoten,$email,$diachi,$sdt,$taikhoan, $matkhau, $vaitro)
{
    $sql = "INSERT INTO nguoidung (hoten,email,diachi,sdt,taikhoan,matkhau,vaitro) VALUES ('$hoten','$email','$diachi','$sdt','$taikhoan','$matkhau','$vaitro')";
    pdo_execute($sql);
}
function insert_nguoidung_view($hoten,$email,$diachi,$sdt,$taikhoan, $matkhau)
{
    $sql = "INSERT INTO nguoidung (hoten,email,diachi,sdt,taikhoan,matkhau) VALUES ('$hoten','$email','$diachi','$sdt','$taikhoan','$matkhau')";
    pdo_execute($sql);
}
function checktaikhoan($taikhoan, $matkhau)
{
    $sql = "SELECT * FROM nguoidung WHERE taikhoan ='" . $taikhoan . "' AND matkhau = '" . $matkhau . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM nguoidung WHERE email ='" . $email . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_nguoidung($ma_nguoidung, $hoten, $email, $diachi,$sdt, $taikhoan,$matkhau,$vaitro)
{
    $sql = "UPDATE nguoidung SET hoten='" . $hoten . "', email='" . $email . "', diachi='" . $diachi . "', sdt='" . $sdt . "', taikhoan='" . $taikhoan . "', matkhau='" . $matkhau . "', vaitro ='" . $vaitro . "' WHERE ma_nguoidung=" . $ma_nguoidung;

    pdo_execute($sql);
}
function update_matkhau($ma_nguoidung, $newpass)
{
    $sql = "UPDATE nguoidung SET matkhau= '" . $newpass . "' WHERE ma_nguoidung=" . $ma_nguoidung;
   
    pdo_execute($sql);
}
// admin
function loadall_nguoidung(){
    $sql = "SELECT * FROM nguoidung order by ma_nguoidung desc";
    $listnguoidung = pdo_query($sql);
    return $listnguoidung;
}
function delete_nguoidung($ma_nguoidung)
{
    $sql = "DELETE FROM nguoidung WHERE ma_nguoidung=" . $ma_nguoidung;
    pdo_execute($sql);
}
function loadone_nguoidung($ma_nguoidung)
{
    $sql = "SELECT * FROM nguoidung WHERE ma_nguoidung =" . $ma_nguoidung;
    $sp = pdo_query_one($sql);
    return $sp;
}


function tong_taikhoan()
{
    $sql = "SELECT * FROM nguoidung WHERE 1";
    $tongdh = pdo_query($sql);
    return sizeof($tongdh);
}

?>