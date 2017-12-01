	<?php include('header.php') ?>
    <?php include('menu.php') ?>
	<section class="cate-detail">
    	<a href="#" class="slick-arrow arrow-left"></a>
    	<a href="#" class="slick-arrow arrow-right"></a>
    	<div class="slider">
		  	<div class="slider-product" data-active=".wax">
    			<h3 class="cate-detail-title">Tạo kiểu tóc X-MEN FOR BOSS</h3>
		  		<div class="all-product wax">
		  			<div class="item motion">
		  				<a href="motion-san-pham-tao-mau-toc-wax.php" class="images">
		  					<img src="images/cate-detail/wax/motion.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/wax/motion-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="motion-san-pham-tao-mau-toc-wax.php" class="tooltip">
		  					Wax tạo kiểu tóc <br>X-MEN MOTION
		  				</a>
		  			</div>
		  			<div class="item luxury">
		  				<a href="luxury-san-pham-tao-mau-toc-wax.php" class="images">
		  					<img src="images/cate-detail/wax/luxury.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/wax/luxury-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="luxury-san-pham-tao-mau-toc-wax.php" class="tooltip">
		  					Wax tạo kiểu tóc <br>X-MEN LUXURY
		  				</a>
		  			</div>
		  			<div class="item intense">
		  				<a href="intense-san-pham-tao-mau-toc-wax.php" class="images">
		  					<img src="images/cate-detail/wax/intense.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/wax/intense-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="intense-san-pham-tao-mau-toc-wax.php" class="tooltip">
		  					Wax tạo kiểu tóc <br>X-MEN INTENSE
		  				</a>
		  			</div>
		  		</div>
		  	</div>
		  	<div class="slider-product" data-active=".gel">
    			<h3 class="cate-detail-title">Tạo kiểu tóc X-MEN FOR BOSS</h3>
		  		<div class="all-product gel">
		  			<div class="item intense">
		  				<a href="intense-san-pham-tao-mau-toc-gel.php" class="images">
		  					<img src="images/cate-detail/gel/intense.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/gel/intense-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="#" class="tooltip">
		  					Gel Vuốt Tóc <br>X-MEN INTENSE
		  				</a>
		  			</div>
		  			<div class="item luxury">
		  				<a href="luxury-san-pham-tao-mau-toc-gel.php" class="images">
		  					<img src="images/cate-detail/gel/luxury.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/gel/luxury-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="#" class="tooltip">
		  					Gel Vuốt Tóc <br>X-MEN LUXURY
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
	            // autoplay: true,
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
		createCookie('menu', 'wax', tomorrow());
		setMenuActive(readCookie('menu'));
	</script>
</body>
</html>