<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách Bình luận</h1>
    </div>
    <div class="khungtables">

        <table class="table">
            <tr>
                <th>ID</th>
                <th >Nội dung bình luận</th>
                <th>Iduser</th>
                <th>Idpro</th>
                <th>Ngày bình luận </th>
                <th>Thao tác</th>
            </tr>
            <?php
             foreach ($listbinhluan as $binhluan) {
                 extract($binhluan);
                 $suabl = "index.php?act=suabl&id=".$id;
                 $xoabl = "index.php?act=xoabl&id=".$id;
                 echo '<tr>
                         
                         <td>' . $id . '</td>
                         <td> <textarea " cols="40" rows="5">' . $noidung . '</textarea></td>
                         <td>' . $iduser . '</td> 
                         <td>' . $idpro . '</td>
                         <td>' . $ngaybinhluan . '</td>
                         <td> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                     </tr>';
             }
             ?>
        </table>
    </div>
</section>
<!-- end thêm danh mục -->