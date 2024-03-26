<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO binhluan (noidung,iduser,idpro,ngaybinhluan) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
} 
function loadall_binhluan($idpro){
    $sql = "SELECT * FROM binhluan where 1";
    if($idpro>0)
        $sql .= " and idpro =".$idpro;
    $sql.=" order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}

function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id=" . $id;
    pdo_execute($sql);
}

function load_ten_binhluan($iduser)
{
    if ($iduser > 0) {
        $sql = "SELECT * FROM nguoidung WHERE ma_nguoidung =" . $iduser;
        
        $hoten= pdo_query_one($sql);
        extract($hoten);
        return $hoten;
    } else {
        return "";
    }
}



?>