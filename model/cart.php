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
            $xoasp = '<td><a href="index.php?act=delcart&idcart= ' . $i . '"><i class="fa-regular fa-trash-can" style="color:red; font-size:18px">xóa</i></a></td>';
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
                        <a class="button" href="index.php?act=delcart">Xóa giỏ hàng?</a>
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
            <p><img height="100px" src="' . $cart['hinh'] . '" alt="">'.$cart['ten_san_pham'].'</p>
          </td>
          
          <td>
            <h5>x'.$cart['soluong'].'</h5>
          </td>
          <td>
            <h5>$'.$cart['gia_sanpham'].'</h5>
          </td>
          <td>
            <p>$'.$cart['thanhtien'].'</p>
          </td>
        </tr>';
        $i++;}
echo '
        <tr>
          <td>
            <h4>Total</h4>
          </td>
          <td>
            <h5></h5>
          </td>
          <td></td>
          <td>
            <h4>$'.$tong.'</h4>
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

function insert_cart($ma_nguoi_dung, $ma_san_pham, $hinh, $ten_san_pham, $gia_sanpham,$masize,$mamausac, $soluong, $thanhtien, $ma_donhang)
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
    $sql = "SELECT * FROM donhang WHERE $ma_donhang =" . $ma_donhang;
    $donhang = pdo_query_one($sql);
    return $donhang;
}

function loadall_cart($ma_donhang)
{
    $sql = "SELECT * FROM cart WHERE ma_donhang =" . $ma_donhang;
    $donhang = pdo_query($sql);
    return $donhang;
}
function loadall_donhang($makh)
{
    $sql = "SELECT * FROM donhang WHERE makh =" . $makh;
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
///////////
function loadall_cart_count($ma_donhang)
{
    $sql = "SELECT * FROM cart WHERE ma_donhang =" . $ma_donhang;
    $donhang = pdo_query($sql);
    return sizeof($donhang);
}
// function loadall_bill($kyw="",$iduser= 0)
// {
//     $sql = "SELECT * FROM bill WHERE 1";
//     if ($iduser > 0) $sql.= " AND iduser =" . $iduser;
//     if ($kyw !="") $sql.= " AND id like '%" . $kyw."%'";
//     $sql.= " ORDER BY id DESC";
//     $listbill = pdo_query($sql);
//     return $listbill;
// }
function get_ttdh($n){
    switch ($n) {
        case '0':
           $tt = 'Đơn hàng mới';
            break;
        case '1':
           $tt = 'Đang xử lí';
            break;
        case '2':
           $tt = 'Đang giao hàng';
            break;
        case '3':
           $tt = 'Hoàn tất';
            break;
        
        default: 
            $tt = 'Đơn hàng mới';
            break;
    }
    return $tt;
}

// function loadall_thongke(){ 
//     $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
//     $sql.= " FROM sanpham left join danhmuc on danhmuc.id = sanpham.iddm";
//     $sql.= " GROUP by danhmuc.id ORDER BY danhmuc.id DESC";
//     $listtk = pdo_query($sql);
//     return $listtk;
// }