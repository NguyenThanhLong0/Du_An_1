<?php
session_start();
include "model/pdo.php";
include "model/danhmucnam.php";
include "model/danhmucnu.php";
include "model/sanpham.php";
include "model/nguoidung.php";
include "model/size.php";
include "model/mausac.php";
include "view/header.php";

include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = []; //moi

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

      // nguoi dùng
    case 'dangky':
      if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        insert_nguoidung_view($hoten, $email, $diachi, $taikhoan, $matkhau);
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
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        $ma_nguoidung = $_POST['ma_nguoidung'];
        $vaitro = $_POST['vaitro'];
        update_nguoidung($ma_nguoidung, $hoten, $email, $diachi, $taikhoan,$matkhau,$vaitro);
        $_SESSION['taikhoan'] = checktaikhoan($taikhoan, $matkhau);
        $thongbao = "Cập nhật thông tin thành công!";
        // header('Location: index.php?act=capnhattk');
      }
      include "view/nguoidung/capnhattk.php";
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

      case "viewcart":
        include "view/cart/viewcart.php";
        break;
      
    case 'thoat':
      session_unset();
      session_destroy();
      // header('Location: index.php');
      // header("Location: index.php");
      echo '<script>window.location = "index.php?act=dangnhap";</script>';
      exit;
      break;



      //moi
      // case 'addtocart':
      //   if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
      //     $id = $_POST['id'];
      //     $name = $_POST['name'];
      //     $img = $_POST['img'];
      //     $price = $_POST['price'];
      //     $soluong = 1;
      //     $ttien = $soluong * $price;
      //     $spadd = ['$id,$name,$img,$price,$soluong,$ttien'];
      //     array_push($_SESSION['mycart'], $spadd);
      //   }
      //   //
      //   include "view/cart/viewcart.php";
      //   break;
      // case 'viewcart':
      //   include "view/cart/viewcart.php";
      //   break;

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
