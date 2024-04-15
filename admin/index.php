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
    include "../model/mausac.php";
    include "../model/size.php";
    include "../model/cart.php";
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
                //end sản phẩm


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
                    $sdt = $_POST['sdt'];
                    if (empty($sdt)) {
                        $error['sdt'] = "không được để trống!";
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
                        insert_nguoidung($hoten, $email, $diachi, $sdt, $taikhoan, $matkhau, $vaitro);
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
                    $sdt = $_POST['sdt'];
                    $taikhoan = $_POST['taikhoan'];
                    $matkhau = $_POST['matkhau'];
                    $vaitro = $_POST['vaitro'];
                    update_nguoidung($ma_nguoidung, $hoten, $email, $diachi, $sdt, $taikhoan, $matkhau, $vaitro);
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

                // Quản lí màu sắc
            case 'addms':
                $error = [];
                // Kiểm tra xem người dùng có click vào nút add hay không
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $check = true;
                    $ten_mausac = $_POST['ten_mausac'];
                    if (empty($ten_mausac)) {
                        $error['ten_mausac'] = "không được để trống!";
                        $check = false;
                    }
                    if ($check) {
                        insert_mausac($ten_mausac);
                        $thongbao = "Thêm thành công";
                    }
                }

                include "mausac/add.php";
                break;

            case 'xoams':
                if (isset($_GET['ma_mausac']) && ($_GET['ma_mausac'] > 0)) {
                    delete_mausac($_GET['ma_mausac']);
                }
                $listms = loadall_mausac();
                include "mausac/list.php";
                break;

            case 'listms':
                $listms = loadall_mausac();
                include "mausac/list.php";
                break;

            case 'suams':
                if (isset($_GET['ma_mausac']) && ($_GET['ma_mausac'] > 0)) {
                    $mausac = loadone_mausac($_GET['ma_mausac']);
                }
                include "mausac/update.php";
                break;

            case 'updatems':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                    $ma_mausac = $_POST['ma_mausac'];
                    $ten_mausac = $_POST['ten_mausac'];


                    update_mausac($ma_mausac, $ten_mausac);
                    $thongbao = "Cập nhật thành công";
                }
                $listms = loadall_mausac();
                include "mausac/list.php";
                break;
                // END Màu sắc

                // Quản lí size
            case 'addsize':
                $error = [];
                // Kiểm tra xem người dùng có click vào nút add hay không
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $check = true;
                    $ten_size = $_POST['ten_size'];
                    if (empty($ten_size)) {
                        $error['ten_size'] = "không được để trống!";
                        $check = false;
                    }
                    if ($check) {
                        insert_size($ten_size);
                        $thongbao = "Thêm thành công";
                    }
                }

                include "size/add.php";
                break;

            case 'xoasize':
                if (isset($_GET['ma_size']) && ($_GET['ma_size'] > 0)) {
                    delete_size($_GET['ma_size']);
                }
                $listsize = loadall_size();
                include "size/list.php";
                break;

            case 'listsize':
                $listsize = loadall_size();
                include "size/list.php";
                break;

            case 'suasize':
                if (isset($_GET['ma_size']) && ($_GET['ma_size'] > 0)) {
                    $size = loadone_size($_GET['ma_size']);
                }
                include "size/update.php";
                break;

            case 'updatesize':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                    $ma_size = $_POST['ma_size'];
                    $ten_size = $_POST['ten_size'];
                    update_size($ma_size, $ten_size);
                    $thongbao = "Cập nhật thành công";
                }
                $listsize = loadall_size();
                include "size/list.php";
                break;
                // END size
                //Quản lý đơn hàng
            case 'listdh':
                if (isset($_POST['listok']) && ($_POST['listok'] != "")) {
                    $kyw = $_POST['kyw'];
                    
                } else {
                    $kyw = '';
                }
                $listbill = loadall_donhangs($kyw);
                include "donhang/list.php";
                break;
            case 'xoadh':
                if (isset($_GET['ma_donhang']) && ($_GET['ma_donhang'] > 0)) {
                    delete_donhang($_GET['ma_donhang']);
                }
                $listbill = loadall_donhangs("", 0); //vuwaf suar donhang
                // $listdonhang = loadall_donhang($makh);
                include "donhang/list.php";
                break;

            case 'suadh':
                if (isset($_GET['ma_donhang']) && ($_GET['ma_donhang'] > 0)) {
                    $donhang = loadone_donhang($_GET['ma_donhang']);
                }
                include "donhang/update.php";
                break;

            case 'updatedh':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $ma_donhang = $_POST['ma_donhang'];
                    $makh = $_POST['makh'];
                    $tenkh = $_POST['tenkh'];
                    $dc_dh = $_POST['dc_dh'];
                    $sdt_dh = $_POST['sdt_dh'];
                    $email_dh = $_POST['email_dh'];
                    // $soluong = $_POST['soluong'];
                    $ngaydathang = $_POST['ngaydathang'];
                    // $pttt = $_POST['pttt'];
                    $tong = $_POST['tong'];
                    // $ma_donhang = $_POST['ma_donhang'];


                    update_donhang($ma_donhang, $makh, $tenkh, $dc_dh, $sdt_dh, $email_dh, $ngaydathang, $tong, $trangthai_dh);
                    $thongbao = "Cập nhật thành công";
                    header("location: index.php?act=listdh");
                }
                //thieuloaihang
                // $listbill = loadall_donhangs("", 0);

                // include "donhang/list.php";
                break;
                ///////////////////////////////////////////////////////////////////////////////////
                // thống kê
            case 'thongke':
                //(thong ke nu)
                $listthongke = loadall_thongke();
                $listthongke_nam = loadall_thongke_nam();
                include "thongke/list.php";
                break;

            case 'bieudo':
                $listthongke = loadall_thongke();
                $listthongke_nam = loadall_thongke_nam();
                include "thongke/bieudo.php";
                break;
                //end thống kê

                //long thêm từ đây
            case 'chitietdh':
                if (isset($_GET['ma_donhang']) && ($_GET['ma_donhang'] > 0)) {
                    $billct = loadall_cart($_GET['ma_donhang']);
                    $donhang = loadone_donhang($_GET['ma_donhang']);
                }
                include "donhang/chitiet.php";
                break;
                //
            case 'xacnhandh':
                if (isset($_POST['ma_donhang']) && ($_POST['ma_donhang'] > 0)) {
                    $ma_donhang = $_POST['ma_donhang'];
                    xacnhan_dh($ma_donhang);
                    header("location: index.php?act=chitietdh&ma_donhang=$ma_donhang");
                }
                break;

            case 'xacnhangiaohang':
                if (isset($_POST['ma_donhang']) && ($_POST['ma_donhang'] > 0)) {
                    $ma_donhang = $_POST['ma_donhang'];
                    xacnhan_giaohang($ma_donhang);
                    header("location: index.php?act=listdh");
                }
                break;

            case 'xacnhanthanhtoan':
                if (isset($_POST['ma_donhang']) && ($_POST['ma_donhang'] > 0)) {
                    $id = $_POST['ma_donhang'];
                    xacnhan_thanhtoan($ma_donhang);
                    header("location: index.php?act=listdh");
                }
                break;

                //hêết long thêem


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
