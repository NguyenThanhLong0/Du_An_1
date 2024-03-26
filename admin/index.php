<?php
session_start();
if (isset($_SESSION['taikhoan']) && ($_SESSION['taikhoan']['vaitro'] == 1)) {
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmucnam.php";
    include "../model/danhmucnu.php";
    include "../model/sanpham.php";
    include "../model/nguoidung.php";
    include "../model/binhluan.php";
    // controller
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
                // DANH MỤC Nữ (ADMIN)
            case 'adddm_nu':
                $error = [];
                // Kiểm tra xem người dùng có click vào nút add hay không
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $check = true;

                    $ten_danhmuc_nu = $_POST['ten_danhmuc_nu'];
                    if (empty($ten_danhmuc_nu)) {
                        $error['ten_danhmuc_nu'] = "không được để trống!";
                        $check = false;
                    }

                    if ($check) {
                        insert_danhmuc_nu($ten_danhmuc_nu);
                        $thongbao = "Thêm thành công";
                    }
                }

                include "danhmuc/danhmucnu/add.php";
                break;

            case 'xoadm_nu':
                if (isset($_GET['ma_danhmuc_nu']) && ($_GET['ma_danhmuc_nu'] > 0)) {
                    delete_danhmuc_nu($_GET['ma_danhmuc_nu']);
                }
                $listdanhmuc_nu = loadall_danhmuc_nu();
                include "danhmuc/danhmucnu/list.php";
                break;

            case 'listdm_nu':
                $listdanhmuc_nu = loadall_danhmuc_nu();
                include "danhmuc/danhmucnu/list.php";
                break;

            case 'suadm_nu':
                if (isset($_GET['ma_danhmuc_nu']) && ($_GET['ma_danhmuc_nu'] > 0)) {
                    $dm_nu = loadone_danhmuc_nu($_GET['ma_danhmuc_nu']);
                }
                include "danhmuc/danhmucnu/update.php";
                break;
            case 'updatedm_nu':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                    $ma_danhmuc_nu = $_POST['ma_danhmuc_nu'];
                    $ten_danhmuc_nu = $_POST['ten_danhmuc_nu'];

                    $error['ten_danhmuc_nu'] = "không được để trống!";
                    $check = false;

                    update_danhmuc_nu($ma_danhmuc_nu, $ten_danhmuc_nu);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc_nu = loadall_danhmuc_nu();
                include "danhmuc/danhmucnu/list.php";
                break;
                // END DANH MỤC nữ (ADMIN)

                // DANH MỤC nam (ADMIN)
            case 'adddm_nam':
                $error = [];
                // Kiểm tra xem người dùng có click vào nút add hay không
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $check = true;

                    $ten_danhmuc_nam = $_POST['ten_danhmuc_nam'];
                    if (empty($ten_danhmuc_nam)) {
                        $error['ten_danhmuc_nam'] = "không được để trống!";
                        $check = false;
                    }

                    if ($check) {
                        insert_danhmuc_nam($ten_danhmuc_nam);
                        $thongbao = "Thêm thành công";
                    }
                }

                include "danhmuc/danhmucnam/add.php";
                break;

            case 'xoadm_nam':
                if (isset($_GET['ma_danhmuc_nam']) && ($_GET['ma_danhmuc_nam'] > 0)) {
                    delete_danhmuc_nam($_GET['ma_danhmuc_nam']);
                }
                $listdanhmuc_nam = loadall_danhmuc_nam();
                include "danhmuc/danhmucnam/list.php";
                break;

            case 'listdm_nam':
                $listdanhmuc_nam = loadall_danhmuc_nam();
                include "danhmuc/danhmucnam/list.php";
                break;

            case 'suadm_nam':
                if (isset($_GET['ma_danhmuc_nam']) && ($_GET['ma_danhmuc_nam'] > 0)) {
                    $dm_nam = loadone_danhmuc_nam($_GET['ma_danhmuc_nam']);
                }
                include "danhmuc/danhmucnam/update.php";
                break;
            case 'updatedm_nam':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                    $ma_danhmuc_nam = $_POST['ma_danhmuc_nam'];
                    $ten_danhmuc_nam = $_POST['ten_danhmuc_nam'];


                    update_danhmuc_nam($ma_danhmuc_nam, $ten_danhmuc_nam);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc_nam = loadall_danhmuc_nam();
                include "danhmuc/danhmucnam/list.php";
                break;
                // END DANH MỤC _nam (ADMIN)




                // controler sản phẩm
            case 'addsp':
                $error = [];
                // Kiểm tra xem người dùng có click vào nút add hay không
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $check = true;
                    $ma_danh_muc_nam = $_POST['ma_danh_muc_nam'];
                    $ma_danh_muc_nu = $_POST['ma_danh_muc_nu'];

                    $ten_sanpham = $_POST['ten_sanpham'];
                    if (empty($ten_sanpham)) {
                        $error['ten_sanpham'] = "không được để trống!";
                        $check = false;
                    }
                    $gia_sanpham = $_POST['gia_sanpham'];
                    if (empty($gia_sanpham)) {
                        $error['gia_sanpham'] = "không được để trống!";
                        $check = false;
                    }
                    $mota = $_POST['mota'];
                    if (empty($mota)) {
                        $error['mota'] = "không được để trống!";
                        $check = false;
                    }
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file". htmlspecialchars( basename( $_FILES["hinh"]["name"]))."has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    if ($hinh == '') {
                        $error['hinh'] = "không được để trống";
                        $check = false;
                    }
                    if ($check) {
                        insert_sanpham($ten_sanpham, $hinh, $gia_sanpham, $mota, $ma_danh_muc_nam, $ma_danh_muc_nu);
                        $thongbao = "Thêm thành công";
                    }
                }

                $listdanhmuc_nu = loadall_danhmuc_nu();
                $listdanhmuc_nam = loadall_danhmuc_nam();
                include "sanpham/add.php";
                break;

            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $ma_danh_muc_nam = $_POST['ma_danh_muc_nam'];
                    $ma_danh_muc_nu = $_POST['ma_danh_muc_nu'];
                } else {
                    $kyw = ' ';
                    $ma_danh_muc_nam = 0;
                    $ma_danh_muc_nu = 0;
                }
                $listdanhmuc_nu = loadall_danhmuc_nu();
                $listdanhmuc_nam = loadall_danhmuc_nam();
                $listsanpham = loadall_sanpham($kyw, $ma_danh_muc_nam, $ma_danh_muc_nu);

                include "sanpham/list.php";
                break;

            case 'xoasp':
                if (isset($_GET['ma_sanpham']) && ($_GET['ma_sanpham'] > 0)) {
                    delete_sanpham($_GET['ma_sanpham']);
                }

                $listdanhmuc_nu = loadall_danhmuc_nu();
                $listdanhmuc_nam = loadall_danhmuc_nam();
                $listsanpham = loadall_sanpham("", 0, 0);
                include "sanpham/list.php";
                break;


            case 'suasp':
                if (isset($_GET['ma_sanpham']) && ($_GET['ma_sanpham'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['ma_sanpham']);
                }
                $listdanhmuc_nu = loadall_danhmuc_nu();
                $listdanhmuc_nam = loadall_danhmuc_nam();
                include "sanpham/update.php";
                break;

            case 'updatesp':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $ma_sanpham = $_POST['ma_sanpham'];    //mã sản phẩm
                    $ma_danh_muc_nam = $_POST['ma_danh_muc_nam'];
                    $ma_danh_muc_nu = $_POST['ma_danh_muc_nu'];
                    $ten_sanpham = $_POST['ten_sanpham'];
                    $gia_sanpham = $_POST['gia_sanpham'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file". htmlspecialchars( basename( $_FILES["hinh"]["name"]))."has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }

                    update_sanpham($ma_sanpham, $ten_sanpham, $gia_sanpham, $mota, $hinh, $ma_danh_muc_nam, $ma_danh_muc_nu);
                    $thongbao = "Cập nhật thành công";
                }

                $listsanpham = loadall_sanpham("", 0, 0);
                $listdanhmuc_nu = loadall_danhmuc_nu();
                $listdanhmuc_nam = loadall_danhmuc_nam();
                include "sanpham/list.php";
                break;



                // nguoidung
            case 'add_nguoidung':
                $error = [];
                // Kiểm tra xem người dùng có click vào nút add hay không
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $check = true;

                    $hoten = $_POST['hoten'];
                    if (empty($hoten)) {
                        $error['hoten'] = "không được để trống!";
                        $check = false;
                    }
                    $email = $_POST['email'];
                    if (empty($email)) {
                        $error['email'] = "không được để trống!";
                        $check = false;
                    }
                    $diachi = $_POST['diachi'];
                    if (empty($diachi)) {
                        $error['diachi'] = "không được để trống!";
                        $check = false;
                    }
                    $taikhoan = $_POST['taikhoan'];
                    if (empty($taikhoan)) {
                        $error['taikhoan'] = "không được để trống!";
                        $check = false;
                    }
                    $matkhau = $_POST['matkhau'];
                    if (empty($matkhau)) {
                        $error['matkhau'] = "không được để trống!";
                        $check = false;
                    }
                    $vaitro = $_POST['vaitro'];


                    if ($check) {
                        insert_nguoidung($hoten, $email, $diachi, $taikhoan, $matkhau, $vaitro);
                        $thongbao = "Thêm thành công";
                    }
                }
                include "nguoidung/add.php";
                break;

            case 'dskh':
                $listnguoidung = loadall_nguoidung();
                include "nguoidung/list.php";
                break;

            case 'xoand':
                if (isset($_GET['ma_nguoidung']) && ($_GET['ma_nguoidung'] > 0)) {
                    delete_nguoidung($_GET['ma_nguoidung']);
                }
                $listnguoidung = loadall_nguoidung();
                include "nguoidung/list.php";
                break;

            case 'suand':
                if (isset($_GET['ma_nguoidung']) && ($_GET['ma_nguoidung'] > 0)) {
                    $nguoidung = loadone_nguoidung($_GET['ma_nguoidung']);
                }
                include "nguoidung/update.php";
                break;

            case 'update_nguoidung':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $ma_nguoidung = $_POST['ma_nguoidung'];
                    $hoten = $_POST['hoten'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $taikhoan = $_POST['taikhoan'];
                    $matkhau = $_POST['matkhau'];
                    $vaitro = $_POST['vaitro'];
                    update_nguoidung($ma_nguoidung, $hoten, $email, $diachi, $taikhoan, $matkhau, $vaitro);
                    $thongbao = "Cập nhật thành công";
                }
                $listnguoidung = loadall_nguoidung();
                include "nguoidung/list.php";
                break;
                // END NGUOIDUNG
                // Binhluan
            case 'dsbl':
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;

            case 'xoabl':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
                // END Binhluan
            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";
} else {
    header('location: ../index.php');
}
