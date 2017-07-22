

	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<style>
		.index_top{
			height: 3rem;
			background: white;
		}
		.logo2{
			height: 1.5rem;
			width: 1.5rem;
			margin-top: 12px;
		}
		.logo1{
			height: 3rem;
		}
		.index_top img{
			height: 100%;
		}
		/*big_img*/
		.big_img{
			height: 10rem;
			background: #e5e5e5;
		}

		.swiper-container{
			background:#e9e9e9;
			text-align:center;
		}
		.swiper-container.banner img{
			display:inline-block;
			width: 100%;
		}
	</style>


		<!-- logo -->
		<div class="index_top container">
			<div class="logo1 left-float">
				<img src="images/index_02.png">
			</div>
			<div class="logo2 right-float text-center">
				<a href="tel:18688888888">
				<img src="images/index_05.png" class="pre">
				</a>
			</div>
		</div>
		<!-- Swiper -->
	    <div class="swiper-container banner">
	        <div class="swiper-wrapper">
	            <div class="swiper-slide"><img src="images/banner01.jpg"></div>
	            <div class="swiper-slide"><img src="images/banner02.jpg"></div>
	            <div class="swiper-slide"><img src="images/banner03.jpg"></div>
	        </div>
	        <!-- Add Pagination -->
	        <div class="swiper-pagination"></div>
	    </div>
	
		<script src="js/swiper.min.js"></script>
		<script>
			var swiper = new Swiper('.swiper-container', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 1,
		        paginationClickable: true,
		        spaceBetween: 30
    		});
		</script>
