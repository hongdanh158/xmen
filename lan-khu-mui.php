	<?php include('header.php') ?>
    <?php include('menu.php') ?>
	<section class="cate-detail">
    	<a href="#" class="slick-arrow arrow-left"></a>
    	<a href="#" class="slick-arrow arrow-right"></a>
    	<div class="slider">
		  	<div class="slider-product" data-active=".roller">
    			<h3 class="cate-detail-title">Lăn khử mùi X-MEN FOR BOSS</h3>
		  		<div class="all-product">
		  			<div class="item motion">
		  				<a href="#" class="images">
		  					<img src="images/cate-detail/lan-khu-mui/motion.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/lan-khu-mui/motion-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="#" class="tooltip">
		  					Lăn khử mùi <br>X-MEN MOTION
		  				</a>
		  			</div>
		  			<div class="item luxury">
		  				<a href="#" class="images">
		  					<img src="images/cate-detail/lan-khu-mui/luxury.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/lan-khu-mui/luxury-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="#" class="tooltip">
		  					Lăn khử mùi <br>X-MEN LUXURY
		  				</a>
		  			</div>
		  			<div class="item intense">
		  				<a href="#" class="images">
		  					<img src="images/cate-detail/lan-khu-mui/intense.png" alt="" class="thumbnail">
		  					<img src="images/cate-detail/lan-khu-mui/intense-hover.png" alt="" class="thumbnail-hover">
		  				</a>
		  				<a href="#" class="tooltip">
		  					Lăn khử mùi <br>X-MEN INTENSE
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
		createCookie('menu', 'roller', tomorrow());
		setMenuActive(readCookie('menu'));
	</script>
</body>
</html>