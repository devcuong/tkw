<?php get_header()?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="ctl00_MainContent_divCenter">
	<section id="procedures">
					<div class="container">
						<div class="row center has-bg carousel-content">
							<h1 class="title-center animation animated-item-1"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="no-bottom center wow fadeInDown">
					
					   <?php the_content(); ?>

				</div>
			<!--/.row-->
		</div>
		<!--/.container-->
	</section>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php if ( !is_page('lien-he') ): ?>
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
				<p>Văn phòng: Tầng Trệt Nhà Số 5, đường HT31, phường Hiệp Thành,
					Quận 12, TP. Hồ Chí Minh</p>
				<p>
					Điện thoại: <a href="tel:0964611882">0964.611.882</a> - MR.Cường <br>
					Hotline: <a href="tel:0964611882">0964.611.882</a> - MR.Cường <br>
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
<?php endif; ?>

	<?php get_footer()?>
</body>
</html>
