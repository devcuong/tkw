<?php
/*
 * Template Name: Trang mau web
 */
?>
<?php

define('THEME_URL', get_stylesheet_directory_uri());
define('DIR_FILE', "/file");
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="vi" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index, follow" />
<meta name="msnbot" content="index, follow" />
<meta name="revisit-after" content="1 days" />
<meta name="geo.placename" content="Vietnamese" />
<meta name="geo.region" content="VN" />
<meta name="DC.creator" content="1OnNet - GianHangVN" />
<meta name="DC.Language" content="vi" />
<meta name="DC.Publisher" content="publisher-name" />
<meta name="author" content="1OnNet - GianHangVN" />
<meta name="copyright"
	content="Copyright 2015 ThietKeWeb24H.net - Vận hành bởi GianHangVN" />
<meta property="og:type" content="Website" />
<meta property="og:site_name"
	content="Hệ thống Marketing Online ThietKeWeb24H.net - GianHangVN" />
 <?php wp_head(); ?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon"
	href="<?php echo THEME_URL . DIR_RESOURCE ; ?>/Icons/favicon.ico" />
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="Resources/Icons/apple-touch-icon-144-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="Resources/Icons/apple-touch-icon-114-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="Resources/Icons/apple-touch-icon-72-precomposed.png" />
<link rel="apple-touch-icon-precomposed"
	href="Resources/Icons/apple-touch-icon-57-precomposed.png" />

<title>Công ty Thiết kế Website ThietKeWeb24H.net - Chuyên nghiệp - Uy tín</title>
<meta name="description"
	content="Công ty ThietKeWeb24h.net thiết kế website chuyên nghiệp, tương thích Mobile, chuẩn SEO Google. Bảo hành và hỗ trợ trọn đời. Không thiết kế web rẻ, kém chất lượng" />
<meta property="og:title"
	content="Công ty Thiết kế Website ThietKeWeb24h.net - Chuyên nghiệp - Uy tín" />
<meta property="og:description"
	content="Công ty ThietKeWeb24H.net thiết kế website chuyên nghiệp, tương thích Mobile, chuẩn SEO Google. Bảo hành và hỗ trợ trọn đời. Không thiết kế web rẻ, kém chất lượng" />
<meta property="og:url" content="http://ThietKeWeb24H.net/" />
<meta property="og:image"
	content="http://ThietKeWeb24H.net/Resources/Images/logo-1onnet.jpg" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77366630-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body ng-app="AppData">
	<header id="header">
		<?php get_header()?>
	</header>
	<div id="ctl00_MainContent_divCenter">
		<section class="no-margin" id="main-slider">
			<div class="media wow fadeInDown noHide">
				<div id="slider1_container"
					style="visibility: hidden; position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
					<!-- Loading Screen -->
					<div u="loading" style="position: absolute; top: 0px; left: 0px;">
						<div
							style="filter: alpha(opacity =     70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
						</div>
						<div
						style="position: absolute; display: block; background: url(<?php echo THEME_URL . DIR_RESOURCE ?>/Icons/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;">
						</div>
					</div>
					<!-- Slides Container -->
					<div u="slides"
						style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
						<div>
							<img u="image"
								src2="<?php echo THEME_URL . DIR_RESOURCE ?>/Images/tp1.jpg" />
						</div>
						<div>
							<img u="image"
								src2="<?php echo THEME_URL . DIR_RESOURCE ?>/Images/purple.jpg" />
						</div>
						<div>
							<img u="image"
								src2="<?php echo THEME_URL . DIR_RESOURCE ?>/Images/blue.jpg" />
						</div>
					</div>
					<style>
.jssorb21 {
	position: absolute;
}

.jssorb21 div,.jssorb21 div:hover,.jssorb21 .av {
	position: absolute;
	/* size of bullet elment */
	width: 19px;
	height: 19px;
	text-align: center;
	line-height: 19px;
	color: white;
	font-size: 12px;
	background: url(<?php echo THEME_URL . DIR_RESOURCE ?>/Icons/b21.png)
		no-repeat;
	overflow: hidden;
	cursor: pointer;
}

.jssorb21 div {
	background-position: -5px -5px;
}

.jssorb21 div:hover,.jssorb21 .av:hover {
	background-position: -35px -5px;
}

.jssorb21 .av {
	background-position: -65px -5px;
}

.jssorb21 .dn,.jssorb21 .dn:hover {
	background-position: -95px -5px;
}
</style>
					<!-- bullet navigator container -->
					<div u="navigator" class="jssorb21"
						style="bottom: 26px; right: 6px;">
						<!-- bullet navigator item prototype -->
						<div u="prototype"></div>
					</div>
					<style>
.jssora21l,.jssora21r {
	display: block;
	position: absolute;
	/* size of arrow element */
	width: 55px;
	height: 55px;
	cursor: pointer;
	background: url(<?php echo THEME_URL . DIR_RESOURCE ?>/Icons/a21.png)
		center center no-repeat;
	overflow: hidden;
}

.jssora21l {
	background-position: -3px -33px;
}

.jssora21r {
	background-position: -63px -33px;
}

.jssora21l:hover {
	background-position: -123px -33px;
}

.jssora21r:hover {
	background-position: -183px -33px;
}

.jssora21l.jssora21ldn {
	background-position: -243px -33px;
}

.jssora21r.jssora21rdn {
	background-position: -303px -33px;
}
</style>
					<span u="arrowleft" class="jssora21l"
						style="top: 123px; left: 8px;"> </span> <span u="arrowright"
						class="jssora21r" style="top: 123px; right: 8px;"> </span>
					<!--#endregion Arrow Navigator Skin End -->
					<a style="display: none" href="http://www.jssor.com">Bootstrap
						Carousel</a>
				</div>
			</div>
			<!--/.carousel-->
		</section>
		<section id="feature">
			<div class="fullwidth-section  dark-background"
				style="background-image: url(http://thietkewebbatdongsan.org/wp-content/uploads/2015/12/sec-bg-2.jpg);">
				<div class="container">
					<div class="media wow fadeInDown noHide">
						<div class="row">
							<div class="center has-bg wow fadeInDown animated"
								style="visibility: visible; animation-name: fadeInDown;">
								<h2 class="title-center">GIAO DIỆN BẤT ĐỘNG SẢN ĐẸP</h2>
								<h3 class="large">
									Có hơn <strong>200+</strong> khách hàng, tin dùng sản phẩm của
									chúng tôi. Với chất lượng sản phẩm cũng như chất lượng dịch vụ
									hỗ trợ tốt nhất.
								</h3>
							</div>
							<div class="col-sm-6">
								<h3>Tính năng cơ bản của website chúng tôi tạo ra:</h3>
								<ul class="list-featured text-right unlist">
									<li>Hơn 200 giao diện cực đẹp</li>
									<li>Code chuẩn seo, thân thiện với Google</li>
									<li>Tương thích trên mọi thiết bị ( responsive)</li>
									<li>Tích hợp công nghệ tân tiến</li>
									<li>Dễ dàng thay đổi theo cách riêng</li>
									<li>Hỗ trợ 24/7</li>
									<li>Quy trình mua hàng nhanh chóng</li>
									<li>Đổi theme trong vòng 24h</li>
								</ul>
							</div>
							<div class="col-sm-6">
								<img style="margin-bottom: -50px;"
									src="http://thietkewebbatdongsan.org/wp-content/uploads/2015/12/iphone.png"
									alt="iphone">
							</div>
							<!--/.col-md-4-->
						</div>
					</div>
				</div>
				<!--/.row-->

			</div>
			<!--/.container-->
		</section>

		<section id="recent-works">
			<div class="container">
				<div class="center wow fadeInDown">
					<h2 class="title-center">MẪU BẤT ĐỘNG SẢN CHÚNG TÔI ĐANG CÓ</h2>

					<p class="des-center">Hàng ngàn khách hàng đã sử dụng những mẫu này và họ đã thành công</p>
				</div>

				<div class="row">
				<?php 
                    query_posts(array( 
                        'post_type' => 'mau_website'
                    ) );  
                ?>
                <?php while (have_posts()) : the_post(); ?>
                       <div class="col-md-4 col-xs-12 text-center">
						<div class="recent-work-resize wow fadeInDown">
							<div class="recent-work-wrap">
							<div class="hovereffect">
								<div class="recent-work-image"
									style="background: url(<?php $hinh_anh_thumbnail =  get_post_meta(get_the_ID(), 'hinh_anh_thumbnail', true);
									if(! empty($hinh_anh_thumbnail))
									    echo wp_get_attachment_url($hinh_anh_thumbnail, "thumbnail", true);
									?>) center">&nbsp;
									
								<div class="overlay">
								<a href="#"><?php
                                $thong_tin_ve_mau = get_post_meta(get_the_ID(), 'thong_tin_ve_mau', true);
                                if (! empty($thong_tin_ve_mau)) {
                                    echo htmlspecialchars_decode($thong_tin_ve_mau);
                                }
                                ;
                                ?></a>
                                </div>
								</div>
                            </div>
								<p class="text-center recent-work-title">
								    <a href="<?php
                                             the_permalink();   
								    ?>" class="recent-web-demo">XEM MẪU</a>
									<a href="<?php
                                             the_permalink();   
								    ?>" target="_blank"
										title="Công Ty Huyền Thoại Việt"> <?php the_title(); ?> </a>
								</p>
							</div>
						</div>
					</div>
                <?php endwhile;
                ?>
			</div>
			<!--/.container-->
		</section>
	</div>
	<section id="contact-info">
		<div class="container">
			<div class="center has-bg wow fadeInDown">
				<h2 class="title-center">LIÊN HỆ VỚI CHÚNG TÔI</h2>
				<p class="des-center">Nếu bạn sẵn sàng để Chúng tôi giúp bạn. Đừng
					chần chừ, hãy liên hệ ngay với Chúng tôi</p>
			</div>
			<div class="row">

				<div class="col-sm-7">

					<h2 class="company-name">ThietKeWeb24H - Vì sự thành công của bạn</h2>
					<p>Văn phòng: Tầng Trệt Nhà Số 5, đường HT31, phường Hiệp Thành, Quận 12, TP. Hồ Chí Minh</p>
					<p>
						Điện thoại: <a href="tel:0964611882">0964.611.882</a> - MR.Cường <br>
						Hotline Hỗ Trợ: <a href="tel:0964611882">0964.611.882</a> - MR.Cường <br>
					</p>
					<p>
						Email: <a href="mailto:info@ThietKeWeb24H.net" target="_top">info@ThietKeWeb24H.net</a>
					</p>
				</div>
				<div class="col-sm-5" ng-controller="ControllerDataContactUs">
				     <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
				</div>
			</div>
		</div>
	</section>
	<section id="customer-valuation">
		<div class="container">
			<div class="center wow fadeInDown">
				<h2 class="title-center">KHÁCH HÀNG THIẾT KẾ WEB BẤT ĐỘNG SẢN</h2>
				<p class="des-center">Khách hàng của chúng tôi đã bán được nhiều dự án, còn bạn thì sao</p>
			</div>
			<div class="row">
			<div class="text-center wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				 <?php echo do_shortcode( '[WLS id="21"]' ); ?>
			</div>
			</div>
		</div>
	</section>
		<?php get_footer(); ?>
</body>
</html>