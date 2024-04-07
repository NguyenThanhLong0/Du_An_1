<?php
extract($onesp);
?>

<!-- ================ start banner area ================= -->
<section class="blog-banner-area" style="height: 200px;" id="blog">
	<div class="container h-100">
		<div class="blog-banner">
			<div class="text-center">
				<h1>SẢN PHẨM CHI TIẾT</h1>
				<nav aria-label="breadcrumb" class="banner-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Sản phẩm chi tiết</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- ================ end banner area ================= -->

<?php echo '<form action="index.php?act=addtocart" method="post" enctype="multipart/form-data">' ?>
<!--================Single Product Area =================-->
<div class="product_image_area">
	<div class="container">
		<div class="row s_product_inner">
			<div class="col-lg-6">
				<div class="owl-carousel owl-theme s_Product_carousel">
					<div class="single-prd-item">
						<!-- <img class="img-fluid" src="img/category/s-p1.jpg" alt=""> -->
						<?php
						$hinh = $img_path . $hinh;
						echo '<img class="img-fluid" src="' . $hinh . '";>';
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="s_product_text">
					<h3><?= $ten_sanpham ?></h3>
					<h2>$ <?= $gia_sanpham ?></h2>
					<ul class="list">
						<li><a class="active"  href="#"><span>Danh mục</span> : <?= $tendm_nam . $tendm_nu ?></a></li>
						<li>
							
							<select name="selected_size" required selected id="ma_size" class="form-select" >
							<option  value="">Chọn Size</option>
								<?php
								foreach ($listsize as $s) {
									extract($s);
									echo '<option value="' . $ma_size . '">' . $ten_size . '</option>';
								}
								?>
							</select>
							<select name="selected_mausac" required id="ma_mausac" class="form-select">
								<option  value="">Chọn Màu</option>
								<?php
								foreach ($listmausac as $mausac) {
									extract($mausac);
									echo '<option value="' . $ma_mausac . '">' . $ten_mausac . '</option>';
								}
								?>
							</select>
						</li><br>
					</ul><br>
					<br>

					<p>Mô tả: <?= $mota ?>.</p>
					<!-- <div class="product_count">
						<a class="button primary-btn" href="#">Add to Cart</a>
					</div> -->
					
					<?php
					echo '
								<input type="hidden" name="ma_sanpham" value="' . $ma_sanpham . '">
                                <input type="hidden" name="ten_sanpham" value="' . $ten_sanpham . '">
                                <input type="hidden" name="hinh" value="' . $hinh . '">
                                <input type="hidden" name="gia_sanpham" value="' . $gia_sanpham . '">
								<input type="hidden" name="ten_size" id="selected_size" value="'.$ten_size.'">
								<input type="hidden" name="ten_mausac" id="selected_mausac" value="'.$ten_mausac.'">
								<input type="submit"  class="button primary-btn" name="addtocart" onclick="return confirm(\'Bạn muốn thêm sản phẩm vào giỏ hàng?\')" value="Thêm vào giỏ hàng">
                            </form>';
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
	<div class="container">
		<ul class="nav nav-tabs" id="myTab" role="tablist">

			<li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bình Luận</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">

			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<!-- <div class="row"> -->
				<!-- <div class="col-lg-6"> -->

				<!-- <div class="comment_list"> -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
				<script>
					$(document).ready(function() {
						$("#binhluan").load("view/binhluan/binhluanform.php", {
							idpro: <?= $ma_sanpham ?>
						});
					});
				</script>
				<div id="binhluan">

				</div>
				<!-- </div> -->
				<!-- </div> -->

				<!-- </div> -->
			</div>

		</div>
	</div>
	</div>
</section>
<!--================End Product Description Area =================-->

<!--================ Start related Product area =================-->
<section class="related-product-area section-margin--small mt-0">
	<div class="container">
		<div class="section-intro pb-60px">
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
	</div>
</section>
<!--================ end related Product area =================-->