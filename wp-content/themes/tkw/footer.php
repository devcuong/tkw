<section id="bottom">
	<div class="container wow fadeInDown" data-wow-duration="1000ms"
		data-wow-delay="600ms">
		<div class="row">
			     <?php
        if (is_active_sidebar('first-footer-widget-area') && ! is_active_sidebar('second-footer-widget-area') && ! is_active_sidebar('third-footer-widget-area') && ! is_active_sidebar('fourth-footer-widget-area')) :
            ?>
    		    <div class="col-md-3 col-sm-6">
    			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    				<!-- .first .widget-area -->
			</div>
			<!-- #fatfooter -->
        
        <?php 
elseif (is_active_sidebar('first-footer-widget-area') && is_active_sidebar('second-footer-widget-area') && ! is_active_sidebar('third-footer-widget-area') && ! is_active_sidebar('fourth-footer-widget-area')) :
            ?>
       <div class="col-md-3 col-sm-6">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		</div>
			<div class="col-md-3 col-sm-6">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
        </div>

        
        <?php 
elseif (is_active_sidebar('first-footer-widget-area') && is_active_sidebar('second-footer-widget-area') && is_active_sidebar('third-footer-widget-area') && ! is_active_sidebar('fourth-footer-widget-area')) :
            ?>
      <div class="col-md-3 col-sm-6">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
	       </div>
			<!-- .first .widget-area -->
			<div class="col-md-3 col-sm-6">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div>
			<!-- .second .widget-area -->
			<div class="col-md-3 col-sm-6">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
				<!-- .third .widget-area -->
			</div>

        
        <?php 
elseif (is_active_sidebar('first-footer-widget-area') && is_active_sidebar('second-footer-widget-area') && is_active_sidebar('third-footer-widget-area') && is_active_sidebar('fourth-footer-widget-area')) :
            ?>
         <div class="col-md-3 col-sm-6">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		</div>
			<!-- .first .widget-area -->
			<div class="col-md-3 col-sm-6">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div>
			<!-- .second .widget-area -->
			<div class="third quarter widget-area">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</div>
			<!-- .third .widget-area -->
			<div class="col-md-3 col-sm-6">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
			</div>

<?php endif; ?>
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