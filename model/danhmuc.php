<?php 
    function insert_danhmuc($ten_danhmuc){
        $sql = "INSERT INTO danhmuc (ten_danhmuc) VALUES ('$ten_danhmuc')";
        pdo_execute($sql);
    }
    function delete_danhmuc($ma_danhmuc){
        $sql = "DELETE FROM danhmuc WHERE ma_danhmuc=" . $ma_danhmuc;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "SELECT * FROM danhmuc order by ma_danhmuc desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($ma_danhmuc){
        $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc =" . $ma_danhmuc;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($ma_danhmuc,$ten_danhmuc){
        $sql = "UPDATE danhmuc SET ten_danhmuc='" . $ten_danhmuc . "' WHERE ma_danhmuc=" . $ma_danhmuc;
        pdo_execute($sql);
    }
?>