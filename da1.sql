-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 09, 2024 lúc 08:43 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `da1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `ngaybinhluan` varchar(100) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `ngaybinhluan`, `iduser`, `idpro`) VALUES
(30, 'hô hô', '2024-03-26 11:57:31', 17, 58),
(31, 'đẹp qúa', '2024-03-26 15:44:08', 17, 65),
(37, 'dep qua\r\n', '2024-03-26 16:34:24', 17, 58),
(40, 'xinh qua', '2024-03-26 17:33:31', 17, 70),
(41, 'áo đẹp chuẩn men', '2024-03-27 06:53:38', 17, 61),
(42, 'Vừa đẹp vừa thanh lịch', '2024-03-27 06:54:05', 17, 63),
(43, 'đen đẹp xịn', '1', 17, 63),
(44, 'xịn xò', '2024-03-27 06:57:25', 17, 63),
(45, 'quá chuẩn', '2024-03-27 06:58:49', 17, 63),
(46, 'xịn xò ', '2024-03-27 06:59:24', 17, 60),
(47, 'hello', '2024-03-27 07:10:23', 17, 71),
(48, 'hi', '2024-03-31 09:28:23', 17, 71),
(49, 'xịn sò quáaaaa\r\n', '2024-04-03 07:47:52', 17, 65),
(50, 'nnnnnnnnn', '2024-04-05 08:21:27', 17, 58),
(51, '3000', '2024-04-05 08:21:35', 17, 58),
(55, 'hello', '2024-04-06 12:22:31', 17, 66);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `ma_cart` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `gia_sanpham` int(255) NOT NULL,
  `masize` int(11) NOT NULL,
  `mamausac` int(11) NOT NULL,
  `soluong` int(100) NOT NULL,
  `thanhtien` int(100) NOT NULL,
  `ma_donhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`ma_cart`, `ma_nguoi_dung`, `ma_san_pham`, `hinh`, `ten_san_pham`, `gia_sanpham`, `masize`, `mamausac`, `soluong`, `thanhtien`, `ma_donhang`) VALUES
(135, 17, 64, 'upload/nu1_aothun1.jpg', 'ÁO THUN CỔ TIM DÀI TAY', 495, 0, 0, 1, 495, 354),
(136, 17, 71, 'upload/nu4_dam2.jpg', 'SEASIDE CHIC - ĐẦM', 1495, 0, 0, 2, 1495, 355),
(137, 17, 71, 'upload/nu4_dam2.jpg', 'SEASIDE CHIC - ĐẦM', 1495, 0, 0, 1, 1495, 356),
(138, 17, 70, 'upload/nu4_dam1.jpg', 'ETHENA DRESS - ĐẦM TIỆC TUYSI', 1495, 0, 0, 1, 1495, 357),
(139, 17, 66, 'upload/nu2_aovb1.jpg', 'KAYLIN BLAZER - ÁO BLAZER THÊU LOGO', 2290, 0, 0, 1, 2290, 359),
(140, 17, 71, 'upload/nu4_dam2.jpg', 'SEASIDE CHIC - ĐẦM', 1495, 0, 0, 1, 1495, 359),
(141, 17, 67, 'upload/nu2_aovb2.jpg', 'ELEGANT BLAZER ', 698, 0, 0, 1, 698, 360),
(142, 17, 71, 'upload/nu4_dam2.jpg', 'SEASIDE CHIC - ĐẦM', 1495, 0, 0, 1, 1495, 360),
(143, 17, 64, 'upload/nu1_aothun1.jpg', 'ÁO THUN CỔ TIM DÀI TAY', 495, 0, 0, 1, 495, 361),
(144, 17, 71, 'upload/nu4_dam2.jpg', 'SEASIDE CHIC - ĐẦM', 1495, 0, 0, 1, 1495, 361),
(145, 17, 70, 'upload/nu4_dam1.jpg', 'ETHENA DRESS - ĐẦM TIỆC TUYSI', 1495, 0, 0, 1, 1495, 362),
(146, 17, 69, 'upload/nu_cs2.jpg', 'ADELA TWEED SET', 1720, 0, 0, 1, 1720, 363),
(147, 17, 65, 'upload/nu1_aothu2.jfif', 'ÁO THUN MONGTOGHI', 375, 0, 0, 1, 375, 364),
(148, 17, 71, 'upload/nu4_dam2.jpg', 'SEASIDE CHIC - ĐẦM', 1495, 0, 0, 1, 1495, 365),
(149, 17, 58, 'upload/nam1_aophao2.jfif', 'ÁO PHAO NAM SIÊU NHẸ', 1590, 0, 0, 1, 1590, 366),
(150, 17, 66, 'upload/nu2_aovb1.jpg', 'KAYLIN BLAZER - ÁO BLAZER THÊU LOGO', 2290, 0, 0, 1, 2290, 367),
(151, 17, 69, 'upload/nu_cs2.jpg', 'ADELA TWEED SET', 1720, 0, 0, 1, 1720, 367),
(152, 17, 71, 'upload/nu4_dam2.jpg', 'SEASIDE CHIC - ĐẦM', 1495, 0, 0, 1, 1495, 368),
(153, 17, 70, 'upload/nu4_dam1.jpg', 'ETHENA DRESS - ĐẦM TIỆC TUYSI', 1495, 0, 0, 1, 1495, 368);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_nam`
--

CREATE TABLE `danhmuc_nam` (
  `ma_danhmuc_nam` int(11) NOT NULL,
  `ten_danhmuc_nam` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_nam`
--

INSERT INTO `danhmuc_nam` (`ma_danhmuc_nam`, `ten_danhmuc_nam`) VALUES
(4, 'Áo Vest Nam'),
(5, 'Áo Khoác Dạ Nam'),
(6, 'Áo Sơ Mi Nam'),
(7, 'Áo Phao Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_nu`
--

CREATE TABLE `danhmuc_nu` (
  `ma_danhmuc_nu` int(11) NOT NULL,
  `ten_danhmuc_nu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_nu`
--

INSERT INTO `danhmuc_nu` (`ma_danhmuc_nu`, `ten_danhmuc_nu`) VALUES
(28, 'Set Công Sở Nữ'),
(29, 'Đầm'),
(30, 'Áo Vest/ Blazer Nữ'),
(31, 'Áo Thun Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ma_donhang` int(11) NOT NULL,
  `makh` int(11) DEFAULT 0,
  `tenkh` varchar(255) NOT NULL,
  `dc_dh` varchar(255) NOT NULL,
  `sdt_dh` varchar(50) NOT NULL,
  `email_dh` varchar(100) NOT NULL,
  `pttt` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1. Trả tiền khi nhận hàng\r\n2. Thanh toán mã QR MoMo\r\n3. Thanh toán VNPay',
  `ngaydathang` varchar(50) NOT NULL,
  `tong` int(11) NOT NULL DEFAULT 0,
  `trangthai_dh` tinyint(1) NOT NULL DEFAULT 0,
  `ten_nguoinhan` varchar(255) DEFAULT NULL,
  `dc_nguoinhan` varchar(255) DEFAULT NULL,
  `sdt_nguoinhan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ma_donhang`, `makh`, `tenkh`, `dc_dh`, `sdt_dh`, `email_dh`, `pttt`, `ngaydathang`, `tong`, `trangthai_dh`, `ten_nguoinhan`, `dc_nguoinhan`, `sdt_nguoinhan`) VALUES
(364, 17, 'trần nguyên', 'hà nội', '0985125849', 'trannguyenab1235@gmail.com', 1, '2024-04-04 18:46:36', 375, 2, NULL, NULL, NULL),
(365, 17, 'trần nguyên', 'hà nội', '0985125849', 'trannguyenab1235@gmail.com', 0, '2024-04-04 18:58:46', 1495, 2, NULL, NULL, NULL),
(366, 17, 'trần nguyên', 'hà nội', '0985125849', 'trannguyenab1235@gmail.com', 0, '2024-04-05 07:05:18', 1590, 2, NULL, NULL, NULL),
(367, 17, 'trần nguyên', 'hà nội', '0985125849', 'trannguyenab1235@gmail.com', 0, '2024-04-05 07:12:55', 4010, 0, NULL, NULL, NULL),
(368, 17, 'trần nguyên', 'hà nội', '0985125849', 'trannguyenab1235@gmail.com', 2, '2024-04-05 08:44:26', 2990, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `ma_mausac` int(11) NOT NULL,
  `ten_mausac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`ma_mausac`, `ten_mausac`) VALUES
(11, 'Be'),
(12, 'Đen'),
(13, 'Hồng'),
(14, 'Trắng'),
(15, 'Xanh'),
(16, 'Xám');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nguoidung` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `vaitro` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nguoidung`, `hoten`, `email`, `diachi`, `taikhoan`, `matkhau`, `sdt`, `vaitro`) VALUES
(17, 'trần nguyên', 'trannguyenab1235@gmail.com', 'hà nội', 'nguyenttph45116', '12345', '0985125849', 1),
(22, 'long', 'trannguyenab1235@gmail.com', 'Hưng Yên', 'longntph45139', '12345', '09851258495', 1),
(25, 'Trần Thế Nguyên', 'trannguyenab1235@gmail.com', 'hà nội', 'tes2', '111111111111', '0985125849', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `gia_sanpham` int(100) NOT NULL,
  `mota` text NOT NULL,
  `ma_mau_sac` int(11) NOT NULL,
  `ma_size` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `ma_danh_muc_nu` int(11) NOT NULL,
  `ma_danh_muc_nam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ma_sanpham`, `ten_sanpham`, `hinh`, `gia_sanpham`, `mota`, `ma_mau_sac`, `ma_size`, `luotxem`, `ma_danh_muc_nu`, `ma_danh_muc_nam`) VALUES
(57, 'ÁO PHAO NAM SIÊU NHẸ', 'nam1_aophao1.jfif', 1590, 'Áo phao chần bông dáng suông. Cổ mũ, dài tay. Có 2 túi khóa kéo phía trước. Cài bằng dây khóa kéo cùng màu phía trước. Vải chần bông cách đều.', 0, 0, 0, 0, 7),
(58, 'ÁO PHAO NAM SIÊU NHẸ', 'nam1_aophao2.jfif', 1590, '                Áo phao chần bông dáng suông. Cổ mũ, dài tay. Có 2 túi khóa kéo phía trước. Cài bằng dây khóa kéo cùng màu phía trước. Vải chần bông cách đều.                ', 0, 0, 0, 0, 7),
(59, 'ÁO SƠ MI NAM DÁNG SLIM FIT', 'nam2_somi1.jfif', 249, 'Áo sơ mi cổ đức. Tay dài bo gấu và 2 khuy cài đính kèm. Cài bằng hàng khuy phía trước.\r\n\r\nDáng áo Slim fit ôm gọn cơ thể và tôn dáng người mặc. Tạo cho nam giới phong thái đĩnh đạc, hiện đại, chuyên nghiệp và lịch lãm.', 0, 0, 0, 0, 6),
(60, 'ÁO SƠ MI NAM TAY NGẮN', 'nam_somi2.jfif', 297, 'Áo sơ mi cổ đức cso 2 khuy cố định. Tay ngắn. Cài bằng hàng khuy phía trước. Vải kiểu xước thu hút.', 0, 0, 0, 0, 6),
(61, 'ÁO KHOÁC DẠ NAM DÁNG DÀI', 'nam3_da1.jfif', 923, 'Áo khoác dạ cổ 2 ve khoét chữ K. Tay dài có 3 khuy trang trí. 2 túi vuông có nắp 2 bên. Dáng áo suông dài. Cài bằng hàng khuy phía trước. Với chất liệu dạ ép cao cấp, mềm mại, giữ ấm tốt, không bám bụi, thiết kế thời trang, phong cách trang nhã, lịch thiệp. ', 0, 0, 0, 0, 5),
(62, 'Áo vest cổ hai ve khoét chữ V', 'nam4_vest1.jfif', 848, '        Để tạo nên những bộ suit đẳng cấp, các nhà thiết kế tài ba của IVY Men tỉ mỉ trong từng đường chỉ, phom dáng cứng cáp từ cầu vai, vạt áo cho đến chiều dài chuẩn của ống tay đều được chú trọng.        ', 0, 0, 0, 0, 4),
(63, 'ÁO VEST ĐEN TRẺ TRUNG', 'nam4_vest2.jfif', 848, '        Để tạo nên những bộ suit đẳng cấp, các nhà thiết kế tài ba của tỉ mỉ trong từng đường chỉ, phom dáng cứng cáp từ cầu vai, vạt áo cho đến chiều dài chuẩn của ống tay đều được chú trọng.\r\nĐi cùng là chất liệu cao cấp nhập khẩu từ Nhật Bản. Tất cả tạo nên những bộ Suit hoàn hảo - Chuẩn mực tối thượng của sự lịch lãm đầy nam tính.        ', 0, 0, 0, 0, 4),
(64, 'ÁO THUN CỔ TIM DÀI TAY', 'nu1_aothun1.jpg', 495, 'Gam màu cam xâm chiếm lãnh địa thời trang Thu/Đông 2023. Là sự kết hợp giữa sắc đỏ mạnh mẽ, nồng nhiệt với gam màu vàng hạnh phúc, tươi mới, sắc cam xu hướng trở thành biểu tượng mang đến sự ấm áp và thổi nguồn năng lượng tích cực để những quý cô tự tin theo đuổi mục tiêu.', 0, 0, 0, 31, 0),
(65, 'ÁO THUN MONGTOGHI', 'nu1_aothu2.jfif', 375, 'Mẫu áo thun trẻ trung này sẽ là item không thể thiếu trong tủ đồ mùa hè của nàng. Dáng áo ôm nhẹ cùng chất liệu co dãn tôn lên triệt để vẻ đẹp hình thể của nàng. Để diện được mẫu áo này đẹp nhất, nàng hãy phối cùng các item cạp cao nhé.', 0, 0, 0, 31, 0),
(66, 'KAYLIN BLAZER - ÁO BLAZER THÊU LOGO', 'nu2_aovb1.jpg', 2290, 'Mang đến những \"Lời bày tỏ từ giá trị đích thực\" trong Fall/winter 2023, Kaylin Blazer giữ vai trò thể hiện hình ảnh người phụ nữ xinh đẹp, mạnh mẽ. Từ không gian cổ điển trên con đường của thủ đô Paris, bên cạnh thiết kế thời thượng đã thành công phô diễn diện mạo vẹn toàn vượt ra khỏi khái niệm sắc đẹp đơn thuần.', 0, 0, 0, 30, 0),
(67, 'ELEGANT BLAZER ', 'nu2_aovb2.jpg', 698, 'Áo blazer với chi tiết cổ V cách tân, tay áo dài, đệm vai. 2 bên may xếp ly tạo điểm nhấn. Áo kèm đai rời thắt nơ đem lại vẻ thanh lịch và tôn dáng người mặc. ', 0, 0, 0, 30, 0),
(68, 'ADELA TWEED SET', 'nu3_cs1.jpg', 1720, 'Adela Set thuộc BST Timeless và được trình diễn trong show thời trang Fall Winter 2022. Bộ sưu tập lấy cảm hứng từ phong cách thời trang Academia, cộng hưởng với những ý tưởng sáng tạo đầy xu hướng, mang đến diện mạo học thức vượt ra khỏi khái niệm sắc đẹp đơn thuần.', 0, 0, 0, 28, 0),
(69, 'ADELA TWEED SET', 'nu_cs2.jpg', 1720, '        Adela Set thuộc BST Timeless và được trình diễn trong show thời trang Fall Winter 2022. Bộ sưu tập lấy cảm hứng từ phong cách thời trang Academia, cộng hưởng với những ý tưởng sáng tạo đầy xu hướng, mang đến diện mạo học thức vượt ra khỏi khái niệm sắc đẹp đơn thuần.        ', 0, 0, 0, 28, 0),
(70, 'ETHENA DRESS - ĐẦM TIỆC TUYSI', 'nu4_dam1.jpg', 1495, 'Tự tin thả dáng và trở thành tâm điểm tại mọi bữa tiệc trong mẫu thiết kế Ethena Dress mới nhất. Lựa chọn dòng chất liệu Tuysi cao cấp kết hợp kiểu dáng ôm xòe bán nguyệt, đầm vừa thể hiện vẻ đẹp sang trọng vừa tôn lên vẻ đẹp ngọc ngà. ', 0, 0, 0, 29, 0),
(71, 'SEASIDE CHIC - ĐẦM', 'nu4_dam2.jpg', 1495, 'Nằm trong BST chào hè \"Scent of the sea\", chiếc váy Seaside Chic được thiết kế với sự kết hợp hoàn hảo giữa phong cách biển cả và vẻ đẹp nữ tính thanh lịch. Chất liệu lụa mềm mại được tuyển chọn kỹ càng, mang lại cảm giác mềm mịn và thoáng mát khi tiếp xúc với làn da.', 0, 0, 0, 29, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `ma_size` int(11) NOT NULL,
  `ten_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`ma_size`, `ten_size`) VALUES
(9, 'S'),
(10, 'M'),
(11, 'L'),
(12, 'XL');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bl_sp` (`idpro`),
  ADD KEY `lk_bl_ngdung` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ma_cart`),
  ADD KEY `lk_cart_ngdung` (`ma_nguoi_dung`),
  ADD KEY `lk_cart_sp` (`ma_san_pham`),
  ADD KEY `lk_cart_size` (`masize`),
  ADD KEY `lk_cart_mausac` (`mamausac`);

--
-- Chỉ mục cho bảng `danhmuc_nam`
--
ALTER TABLE `danhmuc_nam`
  ADD PRIMARY KEY (`ma_danhmuc_nam`);

--
-- Chỉ mục cho bảng `danhmuc_nu`
--
ALTER TABLE `danhmuc_nu`
  ADD PRIMARY KEY (`ma_danhmuc_nu`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_donhang`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`ma_mausac`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nguoidung`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_sanpham`),
  ADD KEY `lk_sp_size` (`ma_size`),
  ADD KEY `lk_sp_mausac` (`ma_mau_sac`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`ma_size`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `ma_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT cho bảng `danhmuc_nam`
--
ALTER TABLE `danhmuc_nam`
  MODIFY `ma_danhmuc_nam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `danhmuc_nu`
--
ALTER TABLE `danhmuc_nu`
  MODIFY `ma_danhmuc_nu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `ma_mausac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ma_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `ma_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_bl_ngdung` FOREIGN KEY (`iduser`) REFERENCES `nguoidung` (`ma_nguoidung`),
  ADD CONSTRAINT `lk_bl_sp` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`ma_sanpham`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart_ngdung` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoidung` (`ma_nguoidung`),
  ADD CONSTRAINT `lk_cart_sp` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`ma_sanpham`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sp_mausac` FOREIGN KEY (`ma_mau_sac`) REFERENCES `mausac` (`ma_mausac`),
  ADD CONSTRAINT `lk_sp_size` FOREIGN KEY (`ma_size`) REFERENCES `size` (`ma_size`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
