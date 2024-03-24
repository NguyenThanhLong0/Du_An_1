<?php 
    function insert_danhmuc_nu($ten_danhmuc_nu){
        $sql = "INSERT INTO danhmuc_nu (ten_danhmuc_nu) VALUES ('$ten_danhmuc_nu')";
        pdo_execute($sql);
    }
    function delete_danhmuc_nu($ma_danhmuc_nu){
        $sql = "DELETE FROM danhmuc_nu WHERE ma_danhmuc_nu=" . $ma_danhmuc_nu;
        pdo_execute($sql);
    }
    function loadall_danhmuc_nu(){
        $sql = "SELECT * FROM danhmuc_nu order by ma_danhmuc_nu desc";
        $listdanhmuc_nu = pdo_query($sql);
        return $listdanhmuc_nu;
    }
    function loadone_danhmuc_nu($ma_danhmuc_nu){
        $sql = "SELECT * FROM danhmuc_nu WHERE ma_danhmuc_nu =" . $ma_danhmuc_nu;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc_nu($ma_danhmuc_nu,$ten_danhmuc_nu){
        $sql = "UPDATE danhmuc_nu SET ten_danhmuc_nu='" . $ten_danhmuc_nu . "' WHERE ma_danhmuc_nu=" . $ma_danhmuc_nu;
        pdo_execute($sql);
    }
?>