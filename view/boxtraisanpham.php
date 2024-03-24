<!-- ================ category section start ================= -->
<section class="section-margin--small mb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">Danh Mục Nam</div>
                    <ul class="main-categories">
                        <li class="common-filter">
                            <form action="#">
                                <ul>
                                    <!-- <li class="filter-list"><label for="men">Men<span> (3600)</span></label></li>
                                    <li class="filter-list"><label for="women">Women<span> (3600)</span></label></li>
                                    <li class="filter-list"><label for="accessories">Accessories<span> (3600)</span></label></li>
                                    <li class="filter-list"><label for="footwear">Footwear<span> (3600)</span></label></li>
                                    <li class="filter-list"><label for="bayItem">Bay item<span> (3600)</span></label></li>
                                    <li class="filter-list"><label for="electronics">Electronics<span> (3600)</span></label></li>
                                    <li class="filter-list"><label for="food">Food<span> (3600)</span></label></li> -->
                                    <?php
                                    $listdanhmuc = loadall_danhmuc_nam();
                                    foreach ($listdanhmuc as $dm_nam) {
                                        extract($dm_nam);
                                        $linkdmnam = "index.php?act=sanpham&ma_danh_muc_nam=" . $ma_danhmuc_nam;
                                        echo '<li class="filter-list" ><a class="nav-link" href="' . $linkdmnam . '">' . $ten_danhmuc_nam . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-filter">
                    <div class="top-filter-head">Danh Mục Nữ</div>
                    <div class="common-filter">
                        <form action="#">
                            <ul>
                                <!-- <li class="filter-list"><label for="men">Men<span> (3600)</span></label></li>
                                <li class="filter-list"><label for="women">Women<span> (3600)</span></label></li>
                                <li class="filter-list"><label for="accessories">Accessories<span> (3600)</span></label></li>
                                <li class="filter-list"><label for="footwear">Footwear<span> (3600)</span></label></li>
                                <li class="filter-list"><label for="bayItem">Bay item<span> (3600)</span></label></li>
                                <li class="filter-list"><label for="electronics">Electronics<span> (3600)</span></label></li>
                                <li class="filter-list"><label for="food">Food<span> (3600)</span></label></li> -->
                                <?php
                                    $listdanhmuc = loadall_danhmuc_nu();
                                    foreach ($listdanhmuc as $dm_nu) {
                                        extract($dm_nu);
                                        $linkdmnu = "index.php?act=sanpham&ma_danh_muc_nu=" . $ma_danhmuc_nu;
                                        echo '<li class="filter-list"><a class="nav-link" href="' . $linkdmnu . '">' . $ten_danhmuc_nu . '</a></li>';
                                    }
                                    ?>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>