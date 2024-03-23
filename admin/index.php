<?php
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/danhmuc_con.php";
include "../model/sanpham.php";
// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // DANH MỤC CHA (ADMIN)
        case 'adddm':
            $error = [];
            // Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $check = true;

                $ten_danhmuc = $_POST['ten_danhmuc'];
                if (empty($ten_danhmuc)) {
                    $error['ten_danhmuc'] = "không được để trống!";
                    $check = false;
                }

                if ($check) {
                    insert_danhmuc($ten_danhmuc);
                    $thongbao = "Thêm thành công";
                }
            }
            
            include "danhmuc/danhmuccha/add.php";
            break;

        case 'xoadm':
            if (isset($_GET['ma_danhmuc']) && ($_GET['ma_danhmuc'] > 0)) {
                delete_danhmuc($_GET['ma_danhmuc']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danhmuccha/list.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danhmuccha/list.php";
            break;
            
        case 'suadm':
            if (isset($_GET['ma_danhmuc']) && ($_GET['ma_danhmuc'] > 0)) {
                $dm = loadone_danhmuc($_GET['ma_danhmuc']);
            }
            include "danhmuc/danhmuccha/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $ma_danhmuc = $_POST['ma_danhmuc'];
                $ten_danhmuc = $_POST['ten_danhmuc'];
                
                    $error['ten_danhmuc'] = "không được để trống!";
                    $check = false;
            
                update_danhmuc($ma_danhmuc, $ten_danhmuc);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danhmuccha/list.php";
            break;
            // END DANH MỤC CHA (ADMIN)

        // DANH MỤC CONN(ADMIN)
        case 'adddm_con':
            $error = [];
            // Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $check = true;
                $ma_danhmuc_cha = $_POST['ma_danhmuc_cha'];

                $ten_danhmuc_con = $_POST['ten_danhmuc_con'];
                if (empty($ten_danhmuc_con)) {
                    $error['ten_danhmuc_con'] = "không được để trống!";
                    $check = false;
                }
                if ($check) {
                    insert_danhmuc_con($ten_danhmuc_con, $ma_danhmuc_cha);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danhmuccon/add.php";
            break;

        case 'xoadm_con':
            if (isset($_GET['ma_danhmuc_con']) && ($_GET['ma_danhmuc_con'] > 0)) {
                delete_danhmuc_con($_GET['ma_danhmuc_con']);
            }
            $listdanhmuc = loadall_danhmuc();
            $listdanhmuc_con = loadall_danhmuc_con("", 0);
            include "danhmuc/danhmuccon/list.php";
            break;

        case 'listdm_con':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $ma_danhmuc_cha = $_POST['ma_danhmuc_cha'];
            } else {
                $kyw = '';
                $ma_danhmuc_cha = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listdanhmuc_con = loadall_danhmuc_con($kyw, $ma_danhmuc_cha);
            include "danhmuc/danhmuccon/list.php";
            break;


            
        case 'suadm_con':
            if (isset($_GET['ma_danhmuc_con']) && ($_GET['ma_danhmuc_con'] > 0)) {
                $dm_con = loadone_danhmuc_con($_GET['ma_danhmuc_con']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danhmuccon/update.php";
            break;
            
        case 'updatedm_con':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ma_danhmuc_cha = $_POST['ma_danhmuc_cha'];
                $ma_danhmuc_con = $_POST['ma_danhmuc_con'];
                $ten_danhmuc_con = $_POST['ten_danhmuc_con'];
                
                $error['ten_danhmuc_con'] = "không được để trống!";
                $check = false;
            
                update_danhmuc_con($ma_danhmuc_con, $ten_danhmuc_con, $ma_danhmuc_cha);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listdanhmuc_con = loadall_danhmuc_con("", 0);
            include "danhmuc/danhmuccon/list.php";
            break;
// End danh mục conn(ADMIN)


            // controler sản phẩm
        case 'addsp':
            $error = [];
            // Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $check = true;
                $ma_danh_muc = $_POST['ma_danh_muc'];
                $ma_danh_muc_con = $_POST['ma_danh_muc_con'];
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
                    insert_sanpham($ten_sanpham, $hinh,$gia_sanpham, $mota, $ma_danh_muc, $ma_danh_muc_con);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdanhmuc_con = loadall_danhmuc_con("", 0);
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $ma_danh_muc = $_POST['ma_danh_muc'];
            } else {
                $kyw = '';
                $ma_danh_muc = 0;
            }
            $listdanhmuc_con = loadall_danhmuc_con("", 0);
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $ma_danh_muc);

            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['ma_sanpham']) && ($_GET['ma_sanpham'] > 0)) {
                delete_sanpham($_GET['ma_sanpham']);
            }
            
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);

            include "sanpham/list.php";
            break;


        case 'suasp':
            if (isset($_GET['ma_sanpham']) && ($_GET['ma_sanpham'] > 0)) {
                $sanpham = loadone_sanpham($_GET['ma_sanpham']);
            }
            $listdanhmuc = loadall_danhmuc();
            $listdanhmuc_con = loadall_danhmuc_con("", 0);
            include "sanpham/update.php";
            break;

        case 'updatesp':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $ma_sanpham = $_POST['ma_sanpham'];    //mã sản phẩm
                $ma_danh_muc = $_POST['ma_danh_muc'];  // mã danh mục liên kết danh mục cha
                $ma_danh_muc_con = $_POST['ma_danh_muc_con'];
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
                update_sanpham($ma_sanpham, $ma_danh_muc, $ten_sanpham,$gia_sanpham, $mota, $hinh,$ma_danh_muc_con);
                $thongbao = "Cập nhật thành công";
            }
            
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            $listdanhmuc_con = loadall_danhmuc_con("", 0);
            include "sanpham/list.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
