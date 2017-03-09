<section id="bottom">
	<div class="container wow fadeInDown" data-wow-duration="1000ms"
		data-wow-delay="600ms">
		<div class="row">
			     <?php
        if (is_active_sidebar('first-footer-widget-area') && ! is_active_sidebar('second-footer-widget-area') && ! is_active_sidebar('third-footer-widget-area') && ! is_active_sidebar('fourth-footer-widget-area')) :
            ?>
			<aside class="fatfooter" role="complementary">
							<div class="first full-width widget-area">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div>
				<!-- .first .widget-area -->

			</aside>
			<!-- #fatfooter -->


        <?php elseif (is_active_sidebar('first-footer-widget-area') && is_active_sidebar('second-footer-widget-area') && ! is_active_sidebar('third-footer-widget-area') && ! is_active_sidebar('fourth-footer-widget-area')) :
            ?>
			<aside class="fatfooter" role="complementary">
							<div class="first half left widget-area">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div>
							<!-- .first .widget-area -->

							<div class="second half right widget-area">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div>
							<!-- .second .widget-area -->
			</aside>
			<!-- #fatfooter -->


        <?php elseif (is_active_sidebar('first-footer-widget-area') && is_active_sidebar('second-footer-widget-area') && is_active_sidebar('third-footer-widget-area') && ! is_active_sidebar('fourth-footer-widget-area')) :
            ?>
			<aside class="fatfooter" role="complementary">
							<div class="first one-third left widget-area">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div>
							<!-- .first .widget-area -->

							<div class="second one-third widget-area">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div>
							<!-- .second .widget-area -->

							<div class="third one-third right widget-area">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</div>
				<!-- .third .widget-area -->
			</aside>
			<!-- #fatfooter -->


        <?php elseif (is_active_sidebar('first-footer-widget-area') && is_active_sidebar('second-footer-widget-area') && is_active_sidebar('third-footer-widget-area') && is_active_sidebar('fourth-footer-widget-area')) :
            ?>

			<aside class="fatfooter" role="complementary">
							<div class="first quarter left widget-area">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div>
							<!-- .first .widget-area -->

							<div class="second quarter widget-area">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div>
							<!-- .second .widget-area -->

							<div class="third quarter widget-area">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</div>
							<!-- .third .widget-area -->

							<div class="fourth quarter right widget-area">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
			</div>
				<!-- .fourth .widget-area -->
			</aside>
			<!-- #fatfooter -->

<?php endif; ?>
</footer>
		</div>
	</div>
</section>
<footer id="footer" class="midnight-blue">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				Copyright &copy; 2015 <a target="_blank" href="index.html"
					title="Chuyên gia Thương Mại Điện Tử Số 1 Việt Nam">ThietKeWeb24h.Net</a>
			</div>
			<div class="col-sm-4">
				<div class="social">
					<ul class="social-share">
						<li><a href="https://www.facebook.com/1onnet/"><i
								class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="sitemap.xml"><i class="fa fa-sitemap"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>