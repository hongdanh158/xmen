	<?php include('header.php') ?>
    <?php include('menu.php') ?>
	<section class="cate-detail">
    	<a href="#" class="slick-arrow arrow-left"></a>
    	<a href="#" class="slick-arrow arrow-right"></a>
    	<div class="slider">
		  	<div class="slider-product" data-active=".spray">
    			<h3 class="cate-detail-title">XỊT TOÀN THÂN X-MEN FOR BOSS</h3>
		  		<div class="all-product spray">
		  			<div class="item luxury">
		  				<a href="#" class="images">
		  					<img src="images/cate-detail/xit-khu-mui/xit-khu-mui-luxury.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/xit-khu-mui/xit-khu-mui-luxury-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="#" class="tooltip">
		  					Xịt toàn thân <br>X-MEN LUXURY
		  				</a>
		  			</div>
		  			<div class="item motion">
		  				<a href="#" class="images">
		  					<img src="images/cate-detail/xit-khu-mui/xit-khu-mui-motion.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/xit-khu-mui/xit-khu-mui-motion-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="#" class="tooltip">
		  					Xịt toàn thân <br>X-MEN MOTION
		  				</a>
		  			</div>
		  			<div class="item intense">
		  				<a href="#" class="images">
		  					<img src="images/cate-detail/xit-khu-mui/xit-khu-mui-intense.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/xit-khu-mui/xit-khu-mui-intense-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="#" class="tooltip">
		  					Xịt toàn thân <br>X-MEN INTENSE
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
		createCookie('menu', 'spray', tomorrow());
		setMenuActive(readCookie('menu'));
	</script>
</body>
</html>