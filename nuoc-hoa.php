	<?php include('header.php') ?>
    <?php include('menu.php') ?>
	<section class="cate-detail">
    	<a href="#" class="slick-arrow arrow-left"></a>
    	<a href="#" class="slick-arrow arrow-right"></a>
    	<div class="slider">
		  	<div class="slider-product" data-active=".perfume">
    			<h3 class="cate-detail-title">Nước hoa X-MEN FOR BOSS</h3>
		  		<div class="all-product perfume">
		  			<div class="item motion">
		  				<a href="motion-nuoc-hoa.php" class="images">
		  					<img src="images/cate-detail/nuoc-hoa/motion.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/nuoc-hoa/motion-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="motion-nuoc-hoa.php" class="tooltip">
		  					Nước hoa <br>X-MEN MOTION
		  				</a>
		  			</div>
		  			<div class="item luxury">
		  				<a href="luxury-nuoc-hoa.php" class="images">
		  					<img src="images/cate-detail/nuoc-hoa/luxury.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/nuoc-hoa/luxury-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="luxury-nuoc-hoa.php" class="tooltip">
		  					Nước hoa <br>X-MEN LUXURY
		  				</a>
		  			</div>
		  			<div class="item intense">
		  				<a href="intense-nuoc-hoa.php" class="images">
		  					<img src="images/cate-detail/nuoc-hoa/intense.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/nuoc-hoa/intense-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="intense-nuoc-hoa.php" class="tooltip">
		  					Nước hoa <br>X-MEN INTENSE
		  				</a>
		  			</div>
		  		</div>
		  	</div>
		</div>
    </section>
	<script>
		$(function(){
			$('.slider').slick({
	            dots: true,
	            slidesToShow: 1,
	            slidesToScroll: 1,
	            autoplay: true,
	            autoplaySpeed: 5000,
	            adaptiveHeight: true,
	            prevArrow: '.arrow-left',
            	nextArrow: '.arrow-right',
	        });
	        $('.slider').on('afterChange', function(event, slick, currentSlide){
				$(this).find('.slider-product').eq()
			});
		});
	</script>
	<div off-canvas="id-2 right push right-menu">
		<div class="o-brand-mobile"></div>
		<div class="navbar-mobile"></div>
	</div>
	<script src="js/script.js"></script>
	<script>
		createCookie('menu', 'perfume', tomorrow());
		setMenuActive(readCookie('menu'));
	</script>
</body>
</html>