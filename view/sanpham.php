	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" style="height: 200px;" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>SẢN PHẨM</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
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
	<div class="col-xl-9 col-lg-8 col-md-7">
		<!-- Start Filter Bar -->
		<div class="filter-bar d-flex flex-wrap align-items-center">
			<div class="sorting">
				<!-- <select>
					<option value="1">Default sorting</option>
					<option value="1">Default sorting</option>
					<option value="1">Default sorting</option>
				</select> -->
			</div>
			<div class="sorting mr-auto">
				<!-- <select>
					<option value="1">Show 12</option>
					<option value="1">Show 12</option>
					<option value="1">Show 12</option>
				</select> -->
			</div>
			<div>
				<div class="input-group filter-bar-search">
					<form action="index.php?act=sanpham" method="post" class="input-group filter-bar-search">
						<input type="text" placeholder="Search" name="kyw">
						<div class="input-group-append">
							<button type="submit" name="timkiem"><i class="ti-search"></i></button>
						</div>
					</form>
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
													<a href="' . $linksp . '"><p class="card-product__price">Quick view</p></a>
                                                    </li>
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
				<h2>Top 12 <span class="section-intro__style">Sản Phẩm</span></h2>
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
			<br>
		</div>
		<br>
	</section>
	<!-- ================ top product area end ================= -->