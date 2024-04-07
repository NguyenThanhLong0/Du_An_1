<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách Đơn hàng</h1>
    </div>
    <div class="form-group">
        <form action="index.php?act=listdh" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
            <input type="submit" name="listok" placeholder="GO">
        </form>
    </div>
    <div class="khungtables">
        <table class="table">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Khách hàng</th>
                <th>Số lượng</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>THAO TÁC</th>
            </tr>
            <?php
            foreach ($listbill as $bill) {
                extract($bill);
                
                $countsp = loadall_cart_count($bill['ma_donhang']);
                $suadh = "index.php?act=suadh&ma_donhang=" . $ma_donhang;
                $xoadh = "index.php?act=xoadh&ma_donhang=" . $ma_donhang;
                $chitietdh = "index.php?act=chitietdh&ma_donhang=" . $ma_donhang;
                $ttdh = get_ttdh("bill[trangthai_dh]");
                $kh = $bill["tenkh"] . '
                    <br>' . $bill["dc_dh"] . '
                    <br>' . $bill["sdt_dh"] . '
                    <br>' . $bill["email_dh"];
                echo '<tr>
                    <td>DA1-' . $bill['ma_donhang'] . '</td>
                    <td>' . $kh . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . $bill["ngaydathang"] . '</td>
                    <td><strong>$' . $bill['tong'] . '</strong></td>
                    <td>' . $ttdh . '</td>
                    <td><a href="' . $suadh . '"><input type="button" value="Sửa"></a> <a href="' . $xoadh . '"><input type="button" value="Xóa"></a><a href="' . $chitietdh . '"><input type="button" value="Chi tiết"></a></td>
                </tr>';
            } ?>
        </table>
    </div>
</section>
<script>
    // Gắn sự kiện lắng nghe cho tất cả các phần tử có class deleteLink
    const deleteLinks = document.querySelectorAll('.deleteLink');
    deleteLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

            const ma_donhang = this.getAttribute('data-id'); // Lấy ID từ thuộc tính data
            const xoadh = "index.php?act=xoadh&ma_donhang=" + ma_donhang;

            Swal.fire({
                title: "Xác nhận hủy đơn?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xác nhận"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Thực hiện yêu cầu xóa thông qua Ajax hoặc window.location.href tại đây
                    Swal.fire({
                        title: "Đã hủy đơn hàng!",
                        icon: "success"
                    }).then(() => {
                        // Chuyển hướng đến URL xóa
                        window.location.href = xoadh;
                    });
                }
            });
        });
    });
</script>