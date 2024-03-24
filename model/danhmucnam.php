<?php 
    function insert_danhmuc_nam($ten_danhmuc_nam){
        $sql = "INSERT INTO danhmuc_nam (ten_danhmuc_nam) VALUES ('$ten_danhmuc_nam')";
        pdo_execute($sql);
    }
    function delete_danhmuc_nam($ma_danhmuc_nam){
        $sql = "DELETE FROM danhmuc_nam WHERE ma_danhmuc_nam=" . $ma_danhmuc_nam;
        pdo_execute($sql);
    }
    function loadall_danhmuc_nam(){
        $sql = "SELECT * FROM danhmuc_nam order by ma_danhmuc_nam desc";
        $listdanhmuc_nam = pdo_query($sql);
        return $listdanhmuc_nam;
    }
    function loadone_danhmuc_nam($ma_danhmuc_nam){
        $sql = "SELECT * FROM danhmuc_nam WHERE ma_danhmuc_nam =" . $ma_danhmuc_nam;
        $dm_nam = pdo_query_one($sql);
        return $dm_nam;
    }
    function update_danhmuc_nam($ma_danhmuc_nam,$ten_danhmuc_nam){
        $sql = "UPDATE danhmuc_nam SET ten_danhmuc_nam='" . $ten_danhmuc_nam . "' WHERE ma_danhmuc_nam=" . $ma_danhmuc_nam;
        pdo_execute($sql);
    }
?>