<?php
function insert_size($ten_size)
{
    $sql = "insert into size(ten_size) values('$ten_size')";
    pdo_execute($sql); //thg-sql-thg
}


function delete_size($ma_size)
{
    $sql = "DELETE FROM size WHERE ma_size=" . $ma_size;
    pdo_execute($sql);
}

function update_size($ma_size, $ten_size)
{
    $sql = "UPDATE size SET ten_size='" . $ten_size . "' WHERE ma_size=" . $ma_size;

    pdo_execute($sql);
}

function loadall_size()
{
    $sql = " SELECT * FROM size order by ma_size desc";
    $listsize = pdo_query($sql);
    return $listsize;
}


function loadone_size($ma_size)
{
    $sql = "SELECT * FROM size WHERE ma_size =" . $ma_size;
    $size = pdo_query_one($sql);
    return $size;
}
function load_ten_size($ma_size)
{
    if ($ma_size > 0) {
        $sql = "select * from size where ma_size=" . $ma_size;
        $sz = pdo_query_one($sql);
        extract($sz);
        return $ten_size;
    } else {
        return "";
    }
}