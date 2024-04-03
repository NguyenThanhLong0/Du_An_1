<section class="khungaddm">
    <div class="tieude">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>

    <div class="row1">
        <div class="chart-container">
            <div id="piechart"></div>
        </div>
        <div class="chart-container">
            <div id="piechart_nam"></div>
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Tải các biểu đồ từ Google
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Vẽ biểu đồ và thiết lập giá trị của biểu đồ
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng sản phẩm'],
                <?php
                foreach ($listthongke as $thongke) {
                    // Kiểm tra xem có mã danh mục và tên danh mục không
                    if (isset($thongke['tendm'])) {
                        echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "],";
                    }
                }
                ?>
            ]);

            // Tùy chọn; thêm tiêu đề và thiết lập chiều rộng và chiều cao của biểu đồ
            var options = {
                'title': 'Thống kê sản phẩm theo danh mục nữ',
                'width': 550,
                'height': 400
            };

            // Hiển thị biểu đồ trong phần tử <div> có id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);

            // Vẽ biểu đồ thứ hai
            drawChartNam();
        }

        // Vẽ biểu đồ thứ hai
        function drawChartNam() {
            var data = google.visualization.arrayToDataTable([
                ['Danh mục nam', 'Số lượng sản phẩm'],
                <?php
                foreach ($listthongke_nam as $thongke) {
                    // Kiểm tra xem có mã danh mục và tên danh mục không
                    if (isset($thongke['tendm'])) {
                        echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "],";
                    }
                }
                ?>
            ]);

            // Tùy chọn; thêm tiêu đề và thiết lập chiều rộng và chiều cao của biểu đồ
            var options = {
                'title': 'Thống kê sản phẩm theo danh mục nam',
                'width': 550,
                'height': 400
            };

            // Hiển thị biểu đồ trong phần tử <div> có id="piechart_nam"
            var chart = new google.visualization.PieChart(document.getElementById('piechart_nam'));
            chart.draw(data, options);
        }
    </script>

    <style>
        .row1 {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .chart-container {
            flex-basis: 48%;
            margin-bottom: 20px;
        }

        #piechart,
        #piechart_nam {
            width: 100%;
            height: 400px;
        }
    </style>
</section>