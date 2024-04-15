<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0; //Tạo biến i để xác định vị trí idcart

    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<thead>
    <tr>
        <th scope="col">Sản phẩm</th>
        <th scope="col">Giá</th>
        <th scope="col">Size</th>
        <th scope="col">Màu sắc</th>
        <th scope="col">Số lướng</th>
        <th scope="col">Thành tiền</th>
        ' . $xoasp_th . '
    </tr>
</thead>
<tbody>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[6];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp = '<td><a href="index.php?act=delcart&idcart=' . $i . '" onclick="return confirm(\'Bạn có chắc muốn xóa sản phẩm khỏi giỏ hàng không?\')"><i class="ti-trash" style="color:red; font-size:18px"></i></a></td>';
        } else {
            $xoasp_td = '';
        }
        echo '<tr>
                <td>
                    <div class="media">
                        <div class="d-flex">
                            <img height="100px" src="' . $cart[2] . '" alt="">
                        </div>
                        <div class="media-body">
                            <p>' . $cart[1] . '</p>
                        </div>
                    </div>
                </td>

                <td>
                    <h5>$' . $cart[3] . '</h5>
                </td>
                <td>' . $cart[4] . '</td>
                <td>' . $cart[5] . '</td>
                <td>
                    <div class="product_count">
                        <input type="number" name="soluong" min="0" value="' . $cart[6] . '" title="Quantity:" class="input-text qty">

                    </div>
                </td>
                <td>
                    <h5>$' . $ttien . '</h5>
                </td>
                ' . $xoasp . '
            </tr>';
        $i++;
    }
    echo '<tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <h5>TỔNG TIỀN:</h5>
            </td>
            <td>
                <h5>$' . $tong . '</h5>
                ' . $xoasp_td2 . '
            </td>
        </tr>
          
            <tr class="bottom_button">
                <td>
                    <a class="button" href="index.php?act=sanpham">Xem thêm sản phẩm</a>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="cupon_text d-flex align-items-center">
                        <a class="button" onclick="return confirm(\'Bạn có chắc muốn xóa giỏ hàng không?\')" href="index.php?act=delcart">Xóa giỏ hàng?</a>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td>
                    <div class="cupon_text d-flex align-items-center">
                        <a class="button" href="index.php?act=donhang">Tiếp tục đặt hàng?</a>
                    </div>
                </td>
            </tr>

        </tbody>';
}
function don_hang_ct($listdonhang)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    foreach ($listdonhang as $cart) {
        $hinh = $img_path . $cart['hinh'];
        $cart['thanhtien'] = $cart['gia_sanpham'] * $cart['soluong'];
        $tong += $cart['thanhtien'];
        echo '<tbody>
        <tr>
          <td>
            <p><img height="100px" src="' . $cart['hinh'] . '" alt="">' . $cart['ten_san_pham'] . '</p>
          </td>
          
          <td>
            <h5>x' . $cart['soluong'] . '</h5>
          </td>
          <td>
            <h5>$' . $cart['gia_sanpham'] . '</h5>
          </td>
          <td>
            <p>$' . $cart['thanhtien'] . '</p>
          </td>
        </tr>';
        $i++;
    }
    echo '
        <tr>
          <td>
            <h4>TỔNG TIỀN ĐƠN HÀNG</h4>
          </td>
          <td>
            <h5></h5>
          </td>
          <td></td>
          <td>
            <h4>$' . $tong . '</h4>
          </td>
        </tr>
      </tbody>';
}



function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[6];
        $tong += $ttien;
    }
    return $tong;
}

function insert_cart($ma_nguoi_dung, $ma_san_pham, $hinh, $ten_san_pham, $gia_sanpham, $masize, $mamausac, $soluong, $thanhtien, $ma_donhang)
{
    $sql = " insert into cart(ma_nguoi_dung,ma_san_pham,hinh,ten_san_pham,gia_sanpham,masize,mamausac,soluong,thanhtien,ma_donhang) values('$ma_nguoi_dung','$ma_san_pham','$hinh','$ten_san_pham','$gia_sanpham','$masize','$mamausac','$soluong','$thanhtien','$ma_donhang')";
    return pdo_execute($sql);
}


function insert_donhang($makh, $tenkh, $dc_dh, $sdt_dh, $email_dh, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = " insert into donhang(makh,tenkh,dc_dh,sdt_dh,email_dh,pttt,ngaydathang,tong) values('$makh','$tenkh','$dc_dh','$sdt_dh','$email_dh','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function loadone_donhang($ma_donhang)
{
    $sql = "SELECT * FROM donhang WHERE ma_donhang =" . $ma_donhang;
    $donhang = pdo_query_one($sql);
    return $donhang;
}

function loadall_cart($ma_donhang)
{
    $sql = "SELECT * FROM cart WHERE ma_donhang =" . $ma_donhang;
    $donhang = pdo_query($sql);
    return $donhang;
}

///////////
function loadall_cart_count($ma_donhang)
{
    $sql = "SELECT * FROM cart WHERE ma_donhang =" . $ma_donhang;
    $donhang = pdo_query($sql);
    return sizeof($donhang);
}
function loadall_bill($kyw = "", $makh = 0)
{
    $sql = "SELECT * FROM makh WHERE 1";
    if ($makh > 0) $sql .= " AND makh =" . $makh;
    if ($kyw != "") $sql .= " AND ma_donhang like '%" . $kyw . "%'";
    $sql .= " ORDER BY ma_donhang DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}

function loadone_donmua($id) //Đơn mua 
{
    $sql = "SELECT * FROM donhang WHERE makh=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function listdonmua($id) //Load all đơn mua theo $_session['user']['id']
{
    $sql = "SELECT * FROM donhang WHERE makh=" . $id;
    $sql .= " ORDER BY ma_donhang DESC";
    $bill = pdo_query($sql);
    return $bill;
}

//////////////////////////
// them mois
function loadall_donhangs($kyw = "", $makh = 0)
{
    $sql = "SELECT * FROM donhang WHERE 1";
    if ($makh > 0) $sql .= " AND makh =" . $makh;
    if ($kyw != "") $sql .= " AND ma_donhang like '%" . $kyw . "%'";
    $sql .= " ORDER BY ma_donhang DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "<span style='color: red; font-weight: bold;'>Chờ xác nhận</span>";
            break;
        case '1':
            $tt = "<span style='color: orange; font-weight: bold;'>Đã xác nhận</span>";
            break;
        case '2':
            $tt = "<span style='color: orange; font-weight: bold;'>Đang giao hàng</span>";
            break;
        case '3':
            $tt = "<span style='color: blue; font-weight: bold;'>Đã nhận được hàng</span>";
            break;
        case '4':
            $tt = "<span style='color: green; font-weight: bold;'>Đã thanh toán</span>";
            break;
        default:
            $tt = "<span style='color: red; font-weight: bold;'>Chờ xác nhận</span>";
            break;
    }
    return $tt;
}


function delete_donhang($ma_donhang)
{
    $sql = "DELETE FROM donhang WHERE ma_donhang=" . $ma_donhang;
    pdo_execute($sql);
}
function update_donhang($ma_donhang, $makh, $tenkh, $dc_dh, $sdt_dh, $email_dh, $ngaydathang, $tong)
{
    $sql = "UPDATE donhang SET makh='" . $makh . "', tenkh='" . $tenkh . "', dc_dh='" . $dc_dh . "', sdt_dh='" . $sdt_dh . "', email_dh='" . $email_dh . "', ngaydathang='" . $ngaydathang . "', tong='" . $tong . "' WHERE ma_donhang = " . $ma_donhang;

    pdo_execute($sql);
}


// function loadall_thongke(){ 
//     $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
//     $sql.= " FROM sanpham left join danhmuc on danhmuc.id = sanpham.iddm";
//     $sql.= " GROUP by danhmuc.id ORDER BY danhmuc.id DESC";
//     $listtk = pdo_query($sql);
//     return $listtk;
// }


// model
function loadall_thongke()
{
    $sql = "SELECT danhmuc_nu.ma_danhmuc_nu as madm, danhmuc_nu.ten_danhmuc_nu as tendm, count(sanpham.ma_sanpham) as countsp, min(sanpham.gia_sanpham) as minprice, max(sanpham.gia_sanpham) as maxprice, avg(sanpham.gia_sanpham) as avgprice";
    $sql .= " FROM sanpham left join danhmuc_nu on danhmuc_nu.ma_danhmuc_nu = sanpham.ma_danh_muc_nu"; // Thay thế danhmuc bằng danhmuc_nu
    $sql .= " GROUP by danhmuc_nu.ma_danhmuc_nu ORDER BY danhmuc_nu.ma_danhmuc_nu DESC"; // Thay thế danhmuc bằng danhmuc_nu
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke_nam()
{
    $sql = "SELECT danhmuc_nam.ma_danhmuc_nam as madm, danhmuc_nam.ten_danhmuc_nam as tendm, count(sanpham.ma_sanpham) as countsp, min(sanpham.gia_sanpham) as minprice, max(sanpham.gia_sanpham) as maxprice, avg(sanpham.gia_sanpham) as avgprice";
    $sql .= " FROM sanpham LEFT JOIN danhmuc_nam ON danhmuc_nam.ma_danhmuc_nam = sanpham.ma_danh_muc_nam"; // Thay thế danhmuc_nu bằng danhmuc_nam
    $sql .= " GROUP BY danhmuc_nam.ma_danhmuc_nam ORDER BY danhmuc_nam.ma_danhmuc_nam DESC"; // Thay thế danhmuc_nu bằng danhmuc_nam
    $listtk = pdo_query($sql);
    return $listtk;
}



////home ad
function tong_doanhthu()
{
    $sql = "SELECT SUM(tong) FROM donhang WHERE trangthai_dh = '4' ";
    $tongdoanhthu = pdo_query($sql);
    return $tongdoanhthu;
}
function tong_donhang()
{
    $sql = "SELECT * FROM donhang WHERE 1";
    $tongdh = pdo_query($sql);
    return sizeof($tongdh);
}


// long thêm từ đây
function xacnhan_dh($ma_donhang)
{
    $sql = "UPDATE donhang SET trangthai_dh = '1' WHERE ma_donhang=" . $ma_donhang;
    pdo_execute($sql);
}
function xacnhan_giaohang($ma_donhang)
{
    $sql = "UPDATE donhang SET trangthai_dh = '2' WHERE ma_donhang=" . $ma_donhang;
    pdo_execute($sql);
}

// function da_nhan_hang($id)
// {
//     $sql = "UPDATE donhang SET `trangthai_dh` = '3' WHERE ma_donhang=" . $id;
//     pdo_execute($sql);
// }
function da_nhan_hang($id)
{
    // Cập nhật trạng thái đơn hàng thành "Đã nhận" (mã trạng thái là 3)
    $sql = "UPDATE donhang SET `trangthai_dh` = '3' WHERE ma_donhang = $id";
    pdo_execute($sql);
}

function xacnhan_thanhtoan($ma_donhang)
{
    $sql = "UPDATE donhang SET trangthai_dh = '4' WHERE ma_donhang=" . $ma_donhang;
    pdo_execute($sql);
}
