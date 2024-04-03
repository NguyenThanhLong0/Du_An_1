<section class="khungaddm">
    <div class="form-group">
        <!-- <form action="index.php?act=listdh" method="post">
            <input type="text" name="kyw" placeholder="Tìm Kiếm">
            <input type="submit" name="listok" placeholder="GO">
        </form> -->
        <div class="khungtables">
            <h1 class="tieude" style="text-align: center;">THỐNG KÊ SẢN PHẨM THEO DANH MỤC NỮ</h1>
            <table class="table"><br>
                <table>
                    <tr>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        if (isset($madm) && isset($tendm)) {
                            echo '<tr>
                        <td>' . $madm . '</td>
                        <td>' . $tendm . '</td>
                        <td>' . $countsp . '</td>
                        <td>' . $maxprice . '</td>
                        <td>' . $minprice . '</td>
                        <td>' . $avgprice . '</td>
                            </tr>';
                        }
                    }
                    ?>

                </table>
            </table><br><br>

            <h1 class="tieude" style="text-align: center;">THỐNG KÊ SẢN PHẨM THEO DANH MỤC NAM</h1>
            <table class="table"><br>
                <table>
                    <tr>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                    <?php
                    foreach ($listthongke_nam as $thongke) {
                        extract($thongke);
                        if (isset($madm) && isset($tendm)) {
                            echo '<tr>
                        <td>' . $madm . '</td>
                        <td>' . $tendm . '</td>
                        <td>' . $countsp . '</td>
                        <td>' . $maxprice . '</td>
                        <td>' . $minprice . '</td>
                        <td>' . $avgprice . '</td>
                            </tr>';
                        }
                    }
                    ?>

                </table>
            </table>
            <div class="row mb10"><br>
                <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>

            </div>
        </div>
</section>