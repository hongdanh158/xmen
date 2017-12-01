<?php include('header.php') ?>
<?php include('menu.php') ?>
   <section class="cate-detail">
    	<a href="#" class="slick-arrow arrow-left"></a>
    	<a href="#" class="slick-arrow arrow-right"></a>
    	<div class="slider">
    		<div class="slider-product" data-active=".shampoo">
    			<h3 class="cate-detail-title">DẦU GỘI X-MEN FOR BOSS</h3>
		  		<div class="all-product shampoo">
		  			<div class="item motion">
		  				<a href="motion-dau-goi-nuoc-hoa.php" class="images">
		  					<img src="images/cate-detail/dau-goi-650/motion.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/dau-goi-650/motion-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="motion-dau-goi-nuoc-hoa.php" class="tooltip">
		  					Dầu gội <br>X-MEN MOTION
		  				</a>
		  			</div>
		  			<div class="item luxury">
		  				<a href="luxury-dau-goi-nuoc-hoa.php" class="images">
		  					<img src="images/cate-detail/dau-goi-650/luxury.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/dau-goi-650/luxury-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="luxury-dau-goi-nuoc-hoa.php" class="tooltip">
		  					Dầu gội <br>X-MEN LUXURY
		  				</a>
		  				
		  			</div>
		  			<div class="item intense">
		  				<a href="intense-dau-goi-nuoc-hoa.php" class="images">
		  					<img src="images/cate-detail/dau-goi-650/intense.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/dau-goi-650/intense-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="ntense-dau-goi-nuoc-hoa.php" class="tooltip">
		  					Dầu gội <br>X-MEN INTENSE
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
		createCookie('menu', 'shampoo', tomorrow());
		setMenuActive(readCookie('menu'));
	</script>
</body>
</html>