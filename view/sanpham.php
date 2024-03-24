	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="category">
	    <div class="container h-100">
	        <div class="blog-banner">
	            <div class="text-center">
	                <h1>Shop Category</h1>
	                <nav aria-label="breadcrumb" class="banner-breadcrumb">
	                    <ol class="breadcrumb">
	                        <li class="breadcrumb-item"><a href="#">Home</a></li>
	                        <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
	                    </ol>
	                </nav>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- ================ end banner area ================= -->
    <?php
    include "boxtraisanpham.php";
    ?>
	<!-- ================ category section start =================
	<section class="section-margin--small mb-5">
	    <div class="container">
	        <div class="row">
	            <div class="col-xl-3 col-lg-4 col-md-5">
	                <div class="sidebar-categories">
	                    <div class="head">Nam</div>
	                    <ul class="main-categories">
	                        <li class="common-filter">
	                            <form action="#">
	                                <ul>
	                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="men" name="brand"><label for="men">Men<span> (3600)</span></label></li>
	                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="women" name="brand"><label for="women">Women<span> (3600)</span></label></li>
	                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="accessories" name="brand"><label for="accessories">Accessories<span> (3600)</span></label></li>
	                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="footwear" name="brand"><label for="footwear">Footwear<span> (3600)</span></label></li>
	                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="bayItem" name="brand"><label for="bayItem">Bay item<span> (3600)</span></label></li>
	                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="electronics" name="brand"><label for="electronics">Electronics<span> (3600)</span></label></li>
	                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="food" name="brand"><label for="food">Food<span> (3600)</span></label></li>
	                                </ul>
	                            </form>
	                        </li>
	                    </ul>
	                </div>
	                <div class="sidebar-filter">
	                    <div class="top-filter-head">Nữ</div>
	                    <div class="common-filter">
	                        <div class="head">Brands</div>
	                        <form action="#">
	                            <ul>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
	                            </ul>
	                        </form>
	                    </div>
	                    <div class="common-filter">
	                        <div class="head">Color</div>
	                        <form action="#">
	                            <ul>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
	                                        Leather<span>(29)</span></label></li>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
	                                        with red<span>(19)</span></label></li>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
	                                <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
	                            </ul>
	                        </form>
	                    </div>
	                    <div class="common-filter">
	                        <div class="head">Price</div>
	                        <div class="price-range-area">
	                            <div id="price-range"></div>
	                            <div class="value-wrapper d-flex">
	                                <div class="price">Price:</div>
	                                <span>$</span>
	                                <div id="lower-value"></div>
	                                <div class="to">to</div>
	                                <span>$</span>
	                                <div id="upper-value"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div> -->

	            <div class="col-xl-9 col-lg-8 col-md-7">
	                <!-- Start Filter Bar -->
	                <div class="filter-bar d-flex flex-wrap align-items-center">
	                    <!-- <div class="sorting">
	                        <select>
	                            <option value="1">Default sorting</option>
	                            <option value="1">Default sorting</option>
	                            <option value="1">Default sorting</option>
	                        </select>
	                    </div>
	                    <div class="sorting mr-auto">
	                        <select>
	                            <option value="1">Show 12</option>
	                            <option value="1">Show 12</option>
	                            <option value="1">Show 12</option>
	                        </select>
	                    </div> -->
	                    <div>
	                        <div class="input-group filter-bar-search">
	                            <input type="text" placeholder="Search">
	                            <div class="input-group-append">
	                                <button type="button"><i class="ti-search"></i></button>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- End Filter Bar -->

	                <!-- Start Best Seller -->
	                <section class="lattest-product-area pb-40 category-list">
	                    <div class="row">
	                        <!-- <div class="col-md-6 col-lg-4">
	                            <div class="card text-center card-product">
	                                <div class="card-product__img">
	                                    <img class="card-img" src="img/product/product2.png" alt="">
	                                    <ul class="card-product__imgOverlay">
	                                        <li><button><i class="ti-search"></i></button></li>
	                                        <li><button><i class="ti-shopping-cart"></i></button></li>
	                                        <li><button><i class="ti-heart"></i></button></li>
	                                    </ul>
	                                </div>
	                                <div class="card-body">
	                                    <p>Beauty</p>
	                                    <h4 class="card-product__title"><a href="#">Women Freshwash</a></h4>
	                                    <p class="card-product__price">$150.00</p>
	                                </div>
	                            </div>
	                        </div> -->
	                        <?php
                            $i = 0;
                            foreach ($dssp as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&ma_sanpham=" . $ma_sanpham;
                                $hinh = $img_path . $hinh;
                                echo '<div class="col-md-6 col-lg-4">
                                        <div class="card text-center card-product">
                                            <div class="card-product__img">
                                                <a href="' . $linksp . '"><img class="card-img" src="' . $hinh . '" alt="" /></a>
                                                <ul class="card-product__imgOverlay">
                                                    <li>
                                                        <form action="index.php?act=addtocart" method="post">
                                                            <input type="hidden" name="ma_sanpham" value="' . $ma_sanpham . '">
                                                            <input type="hidden" name="ten_sanpham" value="' . $ten_sanpham . '">
                                                            <input type="hidden" name="hinh" value="' . $hinh . '">
                                                            <input type="hidden" name="gia_sanpham" value="' . $gia_sanpham . '">
                                                            <button type="submit" name="addtocart" value="Add to cart"><i class="ti-shopping-cart"></i> </button>
                                                        </form>
                                                    </li>
                                                    <li><button><i class="ti-heart"></i></button></li>
                                                </ul>
                                            </div>
                                        <div class="card-body">
                                            <p>Beauty</p>
                                            <h4 class="card-product__title"><a href="' . $linksp . '">' . $ten_sanpham . '</a> </h4>
                                            <p class="card-product__price">$ ' . $gia_sanpham . '</i></p>
                                        </div>
                                        </div>
                                    </div>';
                                $i += 1;
                            }
                            ?>

	                    </div>
	                </section>
	                <!-- End Best Seller -->
	            </div>
	        </div>
	    </div>
	</section>
	<!-- ================ category section end ================= -->

	<!-- ================ top product area start ================= -->
	<section class="related-product-area">
	    <div class="container">
	        <div class="section-intro pb-60px">
	            <p>Popular Item in the market</p>
	            <h2>Top <span class="section-intro__style">Product</span></h2>
	        </div>
	        <div class="row mt-30">
	            
			<?php
			foreach ($dstop10 as $sp) {
				extract($sp);
				$linksp = "index.php?act=sanphamct&ma_sanpham=" . $ma_sanpham;
				$hinh = $img_path . $hinh;
				echo '<div  class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
						<div class="single-search-product-wrapper">
							<div class="single-search-product d-flex">
                       			<a href="' . $linksp . '"> <img src="' . $hinh . '" alt=""> </a>
								<div class="desc">
                        			<a class="title" href="' . $linksp . '">' . $ten_sanpham . '</a>
									<div class="price">' . $gia_sanpham . '</div>
								</div>
							</div>
						</div>
                    	</div>';
			}
			?>
	            
	        </div>
	    </div>
	</section>
	<!-- ================ top product area end ================= -->