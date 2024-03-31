<?php
session_start();
include "model/pdo.php";
include "model/nguoidung.php";
include "model/danhmucnam.php";
include "model/danhmucnu.php";
include "model/sanpham.php";
include "model/size.php";
include "model/mausac.php";
include "model/cart.php";
include "view/header.php";
include "global.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];


$spnew = loadall_sanpham_home();
// $dsdm = loadall_danhmuc();
$dm_nam = loadall_danhmuc_nam();
$dm_nu = loadall_danhmuc_nu();
$dstop10 = loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
  $act = $_GET['act'];
  switch ($act) {
    case 'sanpham':
      if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
        $kyw = $_POST['kyw'];
      } else {
        $kyw = "";
      }
      if (isset($_GET['ma_danh_muc_nam']) && ($_GET['ma_danh_muc_nam'] > 0)) {
        $ma_danh_muc_nam = $_GET['ma_danh_muc_nam'];
      } else {
        $ma_danh_muc_nam = 0;
      }
      if (isset($_GET['ma_danh_muc_nu']) && ($_GET['ma_danh_muc_nu'] > 0)) {
        $ma_danh_muc_nu = $_GET['ma_danh_muc_nu'];
      } else {
        $ma_danh_muc_nu = 0;
      }
      $dssp =  loadall_sanpham($kyw, $ma_danh_muc_nam, $ma_danh_muc_nu);
      // $tendm = load_ten_dm($ma_danh_muc);
      $tendm_nu = load_ten_dm_nu($ma_danh_muc_nu);
      $tendm_nam = load_ten_dm_nam($ma_danh_muc_nam);
      //chú ý chỗ này
      include "view/sanpham.php";
      break;

    case 'sanphamct':
      if (isset($_GET['ma_sanpham']) && ($_GET['ma_sanpham'] > 0)) {
        $ma_sanpham = $_GET['ma_sanpham'];
        $onesp = loadone_sanpham($ma_sanpham);
        extract($onesp);
        // $sp_cung_loai = load_sanpham_cungloai($ma_sanpham, $ma_danh_muc); //luu ý
        $sp_cung_loai = load_sanpham_cungloai($ma_sanpham, $ma_danh_muc_nam, $ma_danh_muc_nu);
        $listsize = loadall_size();
        $listmausac = loadall_mausac();
        $tendm_nu = load_ten_dm_nu($ma_danh_muc_nu);
        $tendm_nam = load_ten_dm_nam($ma_danh_muc_nam);
        include "view/sanphamct.php";
      } else {
        include "view/home.php";
      }
      break;

    case 'giohang':
      include "view/cart/viewcart.php";
      break;

    case 'addtocart':
      if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {

        $ma_sanpham = $_POST['ma_sanpham'];
        $ten_sanpham = $_POST['ten_sanpham'];
        $hinh = $_POST['hinh'];
        $gia_sanpham = $_POST['gia_sanpham'];
        $ten_size = $_POST['ten_size'];
        $ten_mausac = $_POST['ten_mausac'];
        // $ma_size = $_POST['ma_size'];
        // $ma_mausac = $_POST['ma_mausac'];
        if (isset($_POST['soluong'])) {
          $soluong = $_POST['soluong'];
        } else {
          $soluong = 1;
        }
        $ttien = $soluong * $gia_sanpham;
        $temp = 0;
        $i = 0;
        foreach ($_SESSION['mycart'] as $cart) {
          if ($cart[1] === $ten_sanpham) {
            $slnew = $soluong + $cart[6];
            $_SESSION['mycart'][$i][6] = $slnew;
            $temp = 1;
            break;
          }
          $i++;
        }
        if ($temp == 0) {
          $spadd = [$ma_sanpham, $ten_sanpham, $hinh, $gia_sanpham, $ten_size, $ten_mausac, $soluong, $ttien];
          array_push($_SESSION['mycart'], $spadd);
        }
      }
      include "view/cart/viewcart.php";
      break;

    case 'delcart':
      if (isset($_GET['idcart'])) {
        array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
      } else {
        $_SESSION['mycart'] = [];
      }
      // header('Location: index.php?act=addtocart');
      echo '<script>window.location = "index.php?act=giohang";</script>';
      break;

    case 'donhang':
      include "view/cart/donhang.php";
      break;

    case 'billcomfirm':
      if (isset($_POST['dydathang']) && ($_POST['dydathang'])) {
        if ($_SESSION['taikhoan']) 
        $makh = $_SESSION['taikhoan']['ma_nguoidung'];
        else $ma_nguoidung = 0;
        $tenkh = $_POST['hoten'];
        $dc_dh = $_POST['diachi'];
        $sdt_dh = $_POST['sdt'];
        $email_dh = $_POST['email'];
        $pttt = $_POST['pttt'];
        $ngaydathang = date('H:i:sa d/m/Y');
        $tongdonhang = tongdonhang();

        $ma_donhang = insert_donhang($makh, $tenkh, $dc_dh, $sdt_dh, $email_dh, $pttt, $ngaydathang, $tongdonhang);
        foreach ($_SESSION['mycart'] as $cart) {
          insert_cart($_SESSION['taikhoan']['ma_nguoidung'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $cart[6], $cart[7], $ma_donhang);
        }
        //xóa session cart
        // $_SESSION['mycart'] = [];
      }
      $donhang = loadone_donhang($ma_donhang);
      $donhangct = loadall_cart($ma_donhang);
      include "../aroma-master/view/cart/donhangcomfirm.php";
      break;


      // nguoi dùng
    case 'dangky':
      if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        insert_nguoidung_view($hoten, $email, $diachi,$sdt, $taikhoan, $matkhau);
        $thongbao = "Chúc mừng bạn đăng ký thành công. Vui lòng đăng nhập để trải nghiệm nào!";
      }
      include "view/nguoidung/dangky.php";
      break;

    case 'dangnhap':
      if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        $checkuser = checktaikhoan($taikhoan, $matkhau);
        if (is_array($checkuser)) {
          $_SESSION['taikhoan'] = $checkuser;
          // $thongbao = "Bạn đã dăng nhập thành công!";
          // header('Location: index.php');
        } else {
          $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký!";
        }
      }
      include "view/nguoidung/dangnhap.php";
      break;

    case 'capnhattk':
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        $ma_nguoidung = $_POST['ma_nguoidung'];
        $vaitro = $_POST['vaitro'];
        update_nguoidung($ma_nguoidung, $hoten, $email, $diachi,$sdt, $taikhoan, $matkhau, $vaitro);
        $_SESSION['taikhoan'] = checktaikhoan($taikhoan, $matkhau);
        $thongbao = "Cập nhật thông tin thành công!";
        // header('Location: index.php?act=capnhattk');
      }
      include "view/nguoidung/capnhattk.php";
      break;

    case 'doimk':
        if (isset($_POST['dydoimk']) && ($_POST['dydoimk'])) {
            // Kiểm tra và lấy dữ liệu từ form
            if (isset($ma_nguoidung)) $ma_nguoidung = $_POST['$ma_nguoidung'];
           
            $matkhau = $_POST['matkhau'];
            $newpass = $_POST['newpass'];
            $repass = $_POST['repass'];

            if ($matkhau == "" || $newpass == "" || $repass == "") {
                $thongbao = "Nhập đầy đủ thông tin!";
            } elseif (isset($_SESSION['taikhoan'])) {
                // Kiểm tra người dùng đã đăng nhập
                $taikhoan = $_SESSION['taikhoan'];
                if ($matkhau !== $taikhoan['matkhau']) {
                    $thongbao = "Mật khẩu hiện tại không chính xác!";
                } else if ($newpass !== $repass) {
                    $thongbao = "Mật khẩu nhập lại không trùng khớp!";
                } else {
                  $ma_nguoidung = $_SESSION['taikhoan']['ma_nguoidung'];
                    // Gọi hàm update_matkhau() để cập nhật mật khẩu mới
                    update_matkhau($ma_nguoidung, $newpass);
                    $thongbao = "Đổi mật khẩu thành công!";
                }
            } else {
                $thongbao = "Người dùng không hợp lệ!";
            }
        
      }
      include "view/nguoidung/doimk.php";
      break;
    case 'quenmk':
      if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {

        $email = $_POST['email'];

        $checkemail = checkemail($email);
        if (is_array($checkemail)) {
          $thongbao = "Mật khẩu của bạn là: " . $checkemail['matkhau'];
        } else {
          $thongbao = "Email này không tồn tại";
        }
      }
      include "view/nguoidung/quenmk.php";
      break;

      //end nguoi dung


      /// SIZE, MAUSAC
    case 'listsize':
      // cần có cho thay đổi
      $listsize = loadall_size();
      include "view/sanphamct.php";
      break;

    case 'listmausac':
      // cần có cho thay đổi
      $listmausac = loadall_mausac();
      include "view/sanphamct.php";
      break;




    case 'thoat':
      session_unset();
      session_destroy();
      // header('Location: index.php');
      // header("Location: index.php");
      echo '<script>window.location = "index.php?act=dangnhap";</script>';
      exit;
      break;




    case 'dangky':
      include "view/nguoidung/dangky.php";
      break;

      // case 'delcart':
      //   header('location: index.php?act=viewcart');
      //   break;
    default:
      include "view/home.php";
      break;
  }
} else {
  include "view/home.php";
}
include "view/footer.php";
