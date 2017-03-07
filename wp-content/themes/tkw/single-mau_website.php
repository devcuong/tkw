<?php get_header()?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<style>
#pnav .float-image {
	background:
		url(<?php 
		$hinh_anh_demo = get_post_meta( get_the_ID(), 'hinh_anh_demo', true );
		if ( ! empty( $hinh_anh_demo ) ) {
		    echo wp_get_attachment_url( $hinh_anh_demo, "thumbnail", true);
		} ;
		?>)
		0 0 no-repeat;
	background-size: 100%;
	display: block;
	text-align: center;
	color: #fff;
	padding-top: 20px;
	width: 600px;
	height: 500px;
	-webkit-transition: background-position 15s ease-in-out;
	-moz-transition: background-position 15s ease-in-out;
	-ms-transition: background-position 15s ease-in-out;
	-o-transition: background-position 15s ease-in-out;
	transition: background-position 15s ease-in-out;
}

#pnav .float-image:hover {
	background-position: 0px -2857px;
}
</style>
<script>
    function openCity(evt, cityName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("city");
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " w3-red";
    }
</script>
<div id="ctl00_MainContent_divCenter">
	<section id="content" class="container">
		<!--/.container-->
		<div class="blog">
			<div class="row">
				<div class="col-md-8">
					<div class="widget">
						<h1 class="title-widget">
							<span>MẪU M01</span>
						</h1>
						<div class="row">
							<div class="col-sm-12">
								<div class="blog-item">
									<div id="pnav">
										<div class="float-image"></div>
									</div>
								</div>
								<div class="row">
									<div class="w3-container">

										<div class="w3-bar w3-sky">
											<button class="w3-bar-item w3-button tablink w3-red"
												onclick="openCity(event,'chi-tiet')">Chi tiết</button>
											<button class="w3-bar-item w3-button tablink"
												onclick="openCity(event,'comment')">Comment</button>
										</div>

										<div id="chi-tiet" class="w3-container w3-border city">
											<?php the_content(); ?>
										</div>

										<div id="comment" class="w3-container w3-border city"
											style="display: none">
											<p>Đây là comment của phần này</p>
										</div>
									</div>
								</div>

								<div class="row">

									<div class="col-sm-6">
										<!-- abc -->
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
				<div id="ctl00_MainContent_divRight" class="col-md-4">
					<div class="widget categories">
						<h3 class="title-widget">
							<span>Thông tin về mẫu</span>
						</h3>
						<div class="row">
							<div class="col-sm-12">
								<div class="heading price-box">
									<label>Giá: </label><span class="price">1.000.000đ</span>
								</div>
								<div class="shotdes">
										<?php 
                                		$thong_tin_ve_mau = get_post_meta( get_the_ID(), 'thong_tin_ve_mau', true );
                                		if ( ! empty( $thong_tin_ve_mau ) ) {
                                		    echo htmlspecialchars_decode($thong_tin_ve_mau);
                                		} ;
                                		?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="buy-box">
								<div custom-field-product="" class="demo_out">
									<form class="form-demo"
										action="http://tkw.abc/giao-dien-website"
										method="post">
										<input type="hidden" name="link_demo"
											value="<?php 
											$lien_ket_toi_trang_demo = get_post_meta( get_the_ID(), 'lien_ket_toi_trang_demo', true );
											if ( ! empty( $lien_ket_toi_trang_demo ) ) {
											    echo $lien_ket_toi_trang_demo;
											} ;
											?>"><!-- <br> <input
											type="hidden" name="id_demo" value="637"> <input
											type="hidden" name="id_link" value="M21"> -->
										<button formtarget="_blank" type="submit"
											class="btn btn-success btn-demo">
											<i class="fa fa-diamond"></i> Demo
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="widget categories">
						<h3 class="title-widget">
							<span>Tin tức về Seo Google</span>
						</h3>
						<div class="row">abc</div>
					</div> -->
				</div>
			</div>
		</div>

</div>
</section>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer()?>
</body>
</html>
