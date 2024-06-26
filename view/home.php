<main class="site-main">
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
        <div class="container">
            <div class="row no-gutters align-items-center pt-60px">
                <div class="col-5 d-none d-sm-block">
                    <div class="hero-banner__img">
                        <img class="img-fluid" src="img/home/hero-banner.png" alt="">
                    </div>
                </div>
                <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                    <div class="hero-banner__content">
                        <h4>Mua sắm vui vẻ</h4>
                        <h1>Tại Aroma Shopping</h1>
                        <p>Aroma là nơi bạn có thể tìm thấy những mẫu quần áo đẹp và phong cách. Chúng tôi cam kết mang đến cho khách hàng những sản phẩm chất lượng và phục vụ tận tâm. Hãy đến với shop của chúng tôi để trải nghiệm mua sắm thú vị và tìm được những bộ trang phục phù hợp với phong cách của bạn.</p>
                        <a class="button button-hero" href="index.php?act=sanpham">Mua Ngay Nào</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    <section class="section-margin mt-0">
        <div class="owl-carousel owl-theme hero-carousel">
            <div class="hero-carousel__slide">
                <img src="img/home/anh1.jpg" alt="" class="img-fluid">

            </div>
            <div class="hero-carousel__slide">
                <img src="img/home/anh2.jpg" alt="" class="img-fluid">

            </div>
            <div class="hero-carousel__slide">
                <img src="img/home/anh3.jpg" alt="" class="img-fluid">

            </div>
            <div class="hero-carousel__slide">
                <img src="img/home/anh4.jpg" alt="" class="img-fluid">

            </div>

        </div>
    </section>
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Popular Item in the market</p>
                <h2>Trending <span class="section-intro__style">Product</span></h2>
            </div>
            <!-- // <li><button><i class="ti-heart"></i></button></li> -->
            <div class="row">
                <?php
                $i = 0;
                $spnew = loadall_sanpham_home();

                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&ma_sanpham=" . $ma_sanpham;
                    $hinh = $img_path . $hinh;

                    echo '<div class="col-md-6 col-lg-4 col-xl-3">
                   
                            <div class="card text-center card-product">
                                        <div class="card-product__img">
                                            <a href="' . $linksp . '"><img class="card-img" src="' . $hinh . '" alt="" /></a>
                                            
                                                <ul class="card-product__imgOverlay">
                                                        <li>
                                                            <a href="' . $linksp . '"><p class="card-product__price">Quick view</p></a>
                                                        </li>
                                                </ul>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-product__title"><a href="' . $linksp . '">' . $ten_sanpham . '</a></h4>
                                            <p class="card-product__price">$' . $gia_sanpham . '</i></p>
                                        </div>
                                </div>
                        </div>';
                    $i += 1;
                } ?>

            </div>
        </div>
    </section>
    <!-- ================ trending product section end ================= -->


    <!-- ================ offer section start ================= -->
    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="offer__content text-center">
                        <h3>Up To 50% Off</h3>
                        <h4>Winter Sale</h4>
                        <p>Mua sắm ngay tại Aroma để nhận thêm nhiều ưu đãi!</p>
                        <a class="button button--active mt-3 mt-xl-4" href="index.php?act=sanpham">MUA NGAY</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ offer section end ================= -->

    <!-- ================ Best Selling item  carousel ================= -->
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Sản phẩm phổ biến</p>
                <h2>Best <span class="section-intro__style">Sellers</span></h2>
            </div>
            <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                <?php
                $i = 0;
                $spnew = loadall_sanpham_home();
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&ma_sanpham=" . $ma_sanpham;
                    $hinh = $img_path . $hinh;
                    echo '<div class="card text-center card-product">
                                <div class="card-product__img">
                                    <a href="' . $linksp . '"><img class="img-fluid" src="' . $hinh . '" alt="" /></a>
                                    <ul class="card-product__imgOverlay">
                                        <form action="index.php?act=addtocart" method="post">
                                            
                                            <li>
                                                            <a href="' . $linksp . '"><p class="card-product__price">Quick view</p></a>
                                                        </li>
                                        </form>
                                    </ul>
                                </div>
                            <div class="card-body">
                                    <h4 class="card-product__title"><a href="' . $linksp . '">' . $ten_sanpham . '</a></h4>
                                    <p class="card-product__price">$' . $gia_sanpham . '</i></p>
                            </div>
                        </div>';
                    $i += 1;
                } ?>

            </div>
        </div>
    </section>
    <!-- ================ Best Selling item  carousel end ================= -->

    <!-- ================ Subscribe section start ================= -->
    <!-- <section class="subscribe-position">
        <div class="container">
            <div class="subscribe text-center">
                <h3 class="subscribe__title">Get Update From Anywhere</h3>
                <p>Bearing Void gathering light light his eavening unto dont afraid</p>
                <div id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
                        <div class="form-group ml-sm-auto">
                            <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                            <div class="info"></div>
                        </div>
                        <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section> -->
    <!-- ================ Subscribe section end ================= -->



</main>