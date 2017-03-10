<?php 
define( 'THEME_URL', get_stylesheet_directory_uri() );
define( 'DIR_FILE', "/file" );
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="vi">
<!-- Added by HTTrack -->
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
<link rel="shortcut icon" href="<?php echo THEME_URL . DIR_RESOURCE ; ?>/Icons/favicon.ico" />
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
	content="Công ty ThietKeWeb24H.net thiết kế website chuyên nghiệp, tương thích Mobile, chuẩn SEO Google. Bảo hành và hỗ trợ trọn đời. Không thiết kế web rẻ, kém chất lượng" />
<meta property="og:title"
	content="Công ty Thiết kế Website ThietKeWeb24H.net - Chuyên nghiệp - Uy tín" />
<meta property="og:description"
	content="Công ty ThietKeWeb24H.net thiết kế website chuyên nghiệp, tương thích Mobile, chuẩn SEO Google. Bảo hành và hỗ trợ trọn đời. Không thiết kế web rẻ, kém chất lượng" />
<meta property="og:url" content="http://ThietKeWeb24H.net/" />
<meta property="og:image"
	content="http://ThietKeWeb24H.net/Resources/Images/logo-1onnet.jpg" />
</head>
<body ng-app="AppData">
	<header id="header">
		<nav class="navbar navbar-inverse" role="banner">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
    data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span> <span
    class="icon-bar"></span> <span class="icon-bar"></span> <span
    class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html"> <img class="logo"
        alt="Logo ThietKeWeb24H.net" src="<?php echo THEME_URL . DIR_RESOURCE . DIR_IMAGE ; ?>/logo.png" />
        </a>
        </div>
        <?php tkw_menu('primary-menu'); ?>
        <!--<div class="collapse navbar-collapse navbar-right">
         <ul class="nav navbar-nav">
        <li><a title="1OnNet là gì" href="ve-chung-toi-2c.html">Về chúng
        tôi</a></li>
        <li class="dropdown"><a class="dropdown-toggle"
            data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false" title="Thiết kế web"
                    href="thiet-ke-web-24c.html">Thiết kế web<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a title="Mẫu Website tham khảo"
                        href="mau-website-tham-khao-21c.html">Mẫu Website tham khảo</a></li>
                        <li><a title="Thiết kế Website Vé máy bay"
                            href="thiet-ke-website-ve-may-bay-25c.html">Thiết kế Website Vé
                            máy bay</a></li>
                            <li><a title="Thiết kế Website Khách sạn"
                                href="thiet-ke-website-khach-san-26c.html">Thiết kế Website
                                Khách sạn</a></li>
                                <li><a title="Thiết kế Website Nhà hàng"
                                    href="thiet-ke-website-nha-hang-27c.html">Thiết kế Website Nhà
                                    hàng</a></li>
                                    <li><a title="Thiết kế Website Tin tức"
                                        href="thiet-ke-website-tin-tuc-28c.html">Thiết kế Website Tin
                                        tức</a></li>
								<li><a title="Thiết kế Website Công ty"
									href="thiet-ke-website-cong-ty-29c.html">Thiết kế Website Công
									ty</a></li>
								<li><a title="Thiết kế Website Cá nhân"
									href="thiet-ke-website-ca-nhan-30c.html">Thiết kế Website Cá
									nhân</a></li>
									</ul></li>
									<li class="dropdown"><a class="dropdown-toggle"
									data-toggle="dropdown" role="button" aria-haspopup="true"
									aria-expanded="false" title="Dịch vụ gia tăng giá trị"
									href="dich-vu-khac-15c.html">Dịch vụ khác<span class="caret"></span></a>
									<ul class="dropdown-menu">
								<li><a title="1onnet thiết kế Website theo ý tưởng của bạn"
									href="tu-y-tuong-cua-ban-den-website-18c.html">Từ ý tưởng của
									bạn đến Website</a></li>
								<li><a title="1onnet thiết kế Website theo file PSD của bạn"
								    href="tu-psd-den-website-19c.html">Từ PSD đến Website</a></li>
								    <li><a title="Quảng cáo Google" href="quang-cao-google-22n.html">Quảng
								    cáo Google</a></li>
								        <li><a title="Quảng cáo Facebook"
								        href="quang-cao-facebook-23n.html">Quảng cáo Facebook</a></li>
							</ul></li>
							<li><a title="Quy trình" href="quy-trinh-16c.html">Quy trình</a></li>
							<li><a title="Thanh toán" href="thanh-toan-17c.html">Thanh toán</a></li>
						<li><a title="Liên Hệ" href="lien-he.html">Liên Hệ</a></li>
					</ul> 
				</div>
			</div>-->
		</nav>
	</header>