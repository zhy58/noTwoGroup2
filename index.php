<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>仕馨月子会所</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<link rel="stylesheet" href="css/global.css">	
	<!-- <link rel="stylesheet" href="css/index.css">	 -->
	<style>	
		.obj_nav{
			display: block !important;
		}	
		.index_top{
			height: 3rem;
			background: white;
		}
		.logo2{
			height: 1.5rem;
			width: 1.5rem;
		}
		.logo1{
			height: 3rem;
		}
		.index_top img{
			height: 100%;
		}
		/*big_img*/
		.big_img{
			height: auto;
			background: #e5e5e5;
		}
		/**/
		.page_list{
			height: 12rem;
		}
		.page_list_ul li{
			float: left;
			width: 25%;
			text-align: center;
			margin-top: 1.625rem;
			display: inline-block;
		}
		.page_list_img{
			width: 2rem;
			display: inline-block;
			margin-bottom: 0.5rem;
		}
		.page_list_ul li h4{
			font-size: 0.65rem;
		}
		.recommend{
			margin-top: 2rem;
		}
		.recommend .re{
			height: 2.8rem;
		}
		.recommend_list{
			width: 4.125rem;
			height: 1.25rem;
			margin-right: 0.75rem;
		}
		.recommend_list h4{
			font-size: 0.65rem;
			text-align: center;
			line-height: 1.25rem;
			color: white;
		}
		.bg1,.bg2{
			border-bottom-left-radius: 0.7rem;
			border-top-right-radius: 0.7rem;
			text-align: center;
		}
		.bg1{
			background: #EE8FB3;
			border: 0.05rem solid #EE8FB3;
		}
		.bg2{
			background: #74C5BE;
			border: 0.05rem solid #74C5BE;
		}
		.recommend_text{
			height: auto;
		}
		.recommend_text_ul{
			border: 0.05rem solid #dcdcdc;
			padding:0 0.3rem;
		}
		.introduce{
			height: auto;
		}
		.stars_ul_img{
			width: 100%;
			float: left;
		}
		.recommend_text_ul li span{
			display: inline-block;
			font-size: 0.6rem;
		}
		.prink_color{
			color: #EE8FB3;
		}
		.recommend_text_ul li{
			position: relative;
			height: 1.5rem;
			line-height: 1.5rem;
		}
		.recommend_text_ul li .prink_color,
		.recommend_text_ul li .bule_color{			
			width: 0.25rem;
			position: absolute;
			top: 0rem;
			left: 0rem;
		}
		.text_hide{
			width: 63%;
			padding-left: 0.5rem;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}		
		.margin-top{
			margin-top: 0.8rem;
		}
		.margin-right{
			margin-right:1.2rem;
		}
		.see{
			width: 5rem;
			height: 1.25rem;
			margin-top: 1rem;
		}
		.service_img{
			margin-top: 0.5rem;
			margin-left: 0.4rem;
			width: 45.833333333333%;
			position: relative;
		}
		.full{
			width: 95.5555555555555555555%;
		}
		.service_img .pre,
		.big_img .pre
		{
			margin:0;
		}
		.pic_text{
			position:absolute;
			top: 0.5rem;
			left: 0.5rem;
			font-size: 0.65rem;
			color: #fdfdfd;			
		}
		.pic_text span{
			display: inline-block;
			text-shadow: 0.05px 0.05rem 0.05rem #8f9091;
		}
		.understand{
			width: 3.2rem;
			height: 1.2rem;
			position: absolute;
			bottom: 0.5rem;
			left: 0.5rem;
			color: #fdfdfd;
			text-shadow: 0.05px 0.05rem 0.05rem #8f9091;
			border: 0.05rem solid #fff;
			border-bottom-left-radius: 0.7rem;
			border-top-right-radius: 0.7rem;
			text-align: center;
		}
		.index_text{
			margin-top: 1.5rem;
		}
		.index_comment .comment{
			height: 2.75rem;
			border: 0.05rem solid #dcdcdc;
			margin: 0.5rem 0;
		}
		.head_portrait{
			width: 2.75rem;
			height: 2.75rem;			
			text-align: center;
			display: inline-block;
			float: left;	
		}
		.index_comment .comment .inline-block{
			border-radius: 50%;
			background: #ccc;
			width: 2.25rem;
			height: 2.25rem;
			margin-top: 0.25rem;			
		}
		.comment .stars,.stars_ul{
			height: 1rem;
			line-height: 1rem;
			display: block;
		}
		.stars_ul li{
			width: 0.625rem;
			height: 0.625rem;
			font-size: 0;
			display: inline-block;
		}
		.stars_ul li img{
			width: 100%;
			margin: 0;
			vertical-align: top;
		}
		.comment_text{
			height: 1.75rem;
			width: calc(100vw - 4.5rem);
			/*white-space: nowrap;*/
			overflow: hidden;
			text-overflow: ellipsis;
		}
		.comment_text .small_font{
			overflow : hidden;
			text-overflow: ellipsis;
			/*只能是webkit内核的浏览器*/
			display: -webkit-box;
			-webkit-line-clamp: 2;
			-webkit-box-orient: vertical;
			/*********end***************/
		    font-size: 0.6rem;
		    line-height: 0.8rem;
		    /*height: 1.7rem;
		    overflow: hidden;
		    position: relative;*/			
		}
		/*.comment_text .small_font:after{
			content: "......";
			position: absolute;
			height: 0.8rem;
			width: 1.2rem;
			background: white;
			bottom: 0;
			right: 0;
			display: block;
		}*/
		.honor_list{
			text-align: center;			
		}
		.honor_list01{
			width: 18.75%;
		}
		.honor_list_img{			
			margin-bottom: 5%; 
		}
		.honor_list02{
			width: 13.19444444444%;
		}		
		.honor_list04{
			width: 40.6666666666%;
		}		
		.honor_list .pre{
			margin:0;
		}
		.footer{
			height: 9rem;
		}
		.footer_top{
			height: 7rem;
			padding-top: 1.5rem;
		}
		.footer_top_center{
			text-align: center;
		}
		.box_img{
			width: 4.5rem;
			height: 5.5rem;
			display: inline-block;
			position: relative;			
		}
		.box_img span{
			font-size: 0.7rem;
			display: inline-block;
			position:absolute;
			width: 4.5rem;
			height: 1rem;
			left: 0rem;
			bottom: -0.4rem;
		}
		.index_footer{
			height: 2rem;
			text-align: center;
			background: #74c5be;			
			overflow: hidden;
		}
		.Unified_img{
			width: 1.5rem;
			height: 1.5rem;
			line-height: 1.5rem;
		}
		.Unified_img img{
			margin:0;
		}
		.index_footer{
			height: 2rem;
			text-align: center;
			background: #74c5be;
			font-size: 0;			
		}
		.Unified_img{
			width: 1.5rem;
			height: 1.5rem;
			display: inline-block;
			margin-top: 0.25rem;
		}
		.Unified_img img{
			margin:0;
		}
		.footer_Unified{
			width: 33.33333333%;
			height: 2rem;
			line-height: 2rem;
			text-align: center;
			display: inline-block;
			position:relative;
			font-size: 0;
		}
		.index_footer > div + div :after{
			position: absolute;
			content: "";
			display: block;
			width: 0.05rem;
			height: 1.5rem;
			background: white;
			top: 0.25rem;
			left: 0;
			box-shadow: 1px 0px 1px #38928a;
		}
		.footer_span{
			vertical-align: top;
			color: white;
			font-size: 0.8rem;
			display: inline-block;
		}
		.navigation{
			height: 11.5rem;
			width: 10rem;
			background: #fcfcfc;
			text-align: center;
			padding:0.675rem;
			position: absolute;
			bottom: 3rem;
			right: 0rem;
			display: none;
		}
		.navigation:after{
			content: "";
			display: block;
			width: 1.5rem;
			height: 1.5rem;
			transform:rotate(45deg);
			background: #f5f5f5;
			position: absolute;
			bottom: -0.5rem;
			right: 2.5rem;
			z-index: -1;

		}
		.navigation .nav_img{
			width: 2rem;
			display: inline-block;
		}
		.navigation .nav_img img{
			width: 100%;
		}
		.navigation .nav_contain{
			width: 3rem;
			height: 3.575rem;
			text-align: center;
			margin-bottom: 0.5rem;
		}
		.navigation .nav_contain h4{
			font-size: 0.6rem;
		}
		.page_index{
			position:relative;
		}
	</style>
</head>
<body>
<?php require_once 'top.php';?>
<div class="page_index">
	<!-- logo -->
	
	<!-- 首页功能列表 -->
	<div class="page_list">
		<ul class="page_list_ul">
			<li>
				<div class="page_list_img">
					<img class="pre" src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</li>
			<li>
				<div class="page_list_img">
                	<a href="about.php">
						<img class="pre" src="images/index_12.png">
                    </a>
				</div>
				<h4>关于仕馨</h4>
			</li>
			<li>
				<div class="page_list_img">
                	<a href="professionalSystem.php">
					<img class="pre" src="images/index_14.png">
                    </a>
				</div>
				<h4>专业服务体系</h4>
			</li>
			<li>
				<div class="page_list_img">
                	<a href="branch.php">
						<img class="pre" src="images/index_16.png">
                    </a>
				</div>
				<h4>分店介绍</h4>
			</li>
			<li>
				<div class="page_list_img">
                	<a href="package.php">
						<img class="pre" src="images/index_23.png">
                    </a>
				</div>
				<h4>套餐服务</h4>
			</li>
			<li>
				<div class="page_list_img">
                	<a href="comment.php">
						<img class="pre" src="images/index_25.png">
                    </a>
				</div>
				<h4>妈妈见证</h4>
			</li>
			<li>
				<div class="page_list_img">
                	<a href="news.php">
						<img class="pre" src="images/index_26.png">
                    </a>
				</div>
				<h4>月子资讯</h4>
			</li>
			<li>
				<div class="page_list_img">
					<img class="pre" src="images/index_28.png">
				</div>
				<h4>预约参观</h4>
			</li>
		</ul>
	</div>
	<!-- 热点推荐&&视频专区 -->
	<div class="recommend">
		<div class="re text-center">
			<div class="recommend_list inline-block bg1">
				<h4>热点推荐</h4>
			</div>
			<div class="recommend_list inline-block bg2">
				<h4>视频专区</h4>
			</div>			
		</div>
		<div class="recommend_text container">
			<ul class="recommend_text_ul">
				<li>
					<span class="prink_color">●</span>
					<span class="text_hide">美女辣妈 · 入住仕馨真的是一个明智......</span>
					<span class="right-float">─ 2017-05-19</span>
				</li>
				<li>
					<span class="bule_color">●</span>
					<span class="text_hide">美女辣妈 · 入住仕馨真的是一个明智......</span>
					<span class="right-float">─ 2017-05-19</span>
				</li>
				<li>
					<span class="bule_color">●</span>
					<span class="text_hide">美女辣妈 · 入住仕馨真的是一个明智......</span>
					<span class="right-float">─ 2017-05-19</span>
				</li>
				<li>
					<span class="bule_color">●</span>
					<span class="text_hide">美女辣妈 · 入住仕馨真的是一个明智......</span>
					<span class="right-float">─ 2017-05-19</span>
				</li>
				<li>
					<span class="bule_color">●</span>
					<span class="text_hide">美女辣妈 · 入住仕馨真的是一个明智......</span>
					<span class="right-float">─ 2017-05-19</span>
				</li>
				<li>
					<span class="bule_color">●</span>
					<span class="text_hide">美女辣妈 · 入住仕馨真的是一个明智......</span>
					<span class="right-float">─ 2017-05-19</span>
				</li>
				<li>
					<span class="bule_color">●</span>
					<span class="text_hide">美女辣妈 · 入住仕馨真的是一个明智......</span>
					<span class="right-float">─ 2017-05-19</span>
				</li>
			</ul>
		</div>		
	</div>
	<!-- 分店介绍 -->
	<div class="introduce  margin-top">
		<!-- title标题 -->
		<div class="title text-center">
	        <p>
			<span class="left"></span>
	        <span class="text">分店介绍</span>
	        <span class="right"></span>
	        </p>
	        <span>Branch</span>
	    </div>
		<!-- 分店介绍轮播 -->
	    <div class="store">
	    	<div class="store_ul">	    		
	    		<!-- Swiper -->
		    	<div class="swiper-container banner">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide"><img src="images/index_43.jpg"></div>
			            <div class="swiper-slide"><img src="images/index_43.jpg"></div>
			            <div class="swiper-slide"><img src="images/index_43.jpg"></div>
			        </div>
			        <!-- Add Pagination -->
			        <div class="swiper-pagination"></div>
		    	</div>
		    </div>	    	 	
	    </div>
	</div>
	<!-- 点击查看全部 -->
	<div class="re text-center">
		<div class="see inline-block">
			<img src="images/index_50.png" class="pre">
		</div>
	</div>
	<!-- 专业月子服务     这个很牛逼  是沿海峰写的-->
	<div class="Hf_title text-center">
        <p>
		<span class="span_border"></span>
        <span class="text">专业月子服务</span>
        <span class="span_border"></span>
        </p>
        <span>Branch</span>
    </div>    
	<!-- 专业月子服务图片列表 -->
    <div class="service_list">
		<!-- 半屏图 -->
    	<div class="service_img inline-block">
    		<a href="careSystem.php">
	    		<img src="images/index_54.jpg" class="pre">
	    		<div class="pic_text">
	    			<span>Neonatal health care</span>
	    			<span>新生儿健康护理</span>    			
	    		</div>
	    		<p class="understand">点击了解</p>
    		</a>
    	</div>
    	<div class="service_img inline-block">
    		<a href="careSystem.php">
	    		<img src="images/index_54.jpg" class="pre">
	    		<div class="pic_text">
	    			<span>Neonatal health care</span>
	    			<span>新生儿健康护理</span>    			
	    		</div>
	    		<p class="understand">点击了解</p>
    		</a>
    	</div>




    	<!-- 全屏图 -->
    	<div class="service_img inline-block full">
    		<a href="careSystem.php">
	    		<img src="images/index_60.jpg" class="pre">
	    		<div class="pic_text">
	    			<span>Neonatal health care</span>
	    			<span>新生儿健康护理</span>    			
	    		</div>
	    		<p class="understand">点击了解</p>
    		</a>
    	</div>
    	<!-- 半屏图 -->
    	<div class="service_img inline-block">
    		<img src="images/index_54.jpg" class="pre">
    		<div class="pic_text">
    			<span>Neonatal health care</span>
    			<span>新生儿健康护理</span>    			
    		</div>
    		<p class="understand">点击了解</p>
    	</div>
    	<div class="service_img inline-block">
    		<img src="images/index_54.jpg" class="pre">
    		<div class="pic_text">
    			<span>Neonatal health care</span>
    			<span>新生儿健康护理</span>    			
    		</div>
    		<p class="understand">点击了解</p>
    	</div>
    	<!-- 半屏图 -->
    	<div class="service_img inline-block">
    		<img src="images/index_54.jpg" class="pre">
    		<div class="pic_text">
    			<span>Neonatal health care</span>
    			<span>新生儿健康护理</span>    			
    		</div>
    		<p class="understand">点击了解</p>
    	</div>
    	<div class="service_img inline-block">
    		<img src="images/index_54.jpg" class="pre">
    		<div class="pic_text">
    			<span>Neonatal health care</span>
    			<span>新生儿健康护理</span>    			
    		</div>
    		<p class="understand">点击了解</p>
    	</div>

    	<!-- 全屏图 -->
    	<div class="service_img inline-block full">
    		<img src="images/index_60.jpg" class="pre">
    		<div class="pic_text">
    			<span>Neonatal health care</span>
    			<span>新生儿健康护理</span>    			
    		</div>
    		<p class="understand">点击了解</p>
    	</div>
    </div>
	<!-- 仕馨口碑 -->
    <div class="index_comment">	    
		<div class="title text-center">
	        <p>
			<span class="left"></span>
	        <span class="text">仕馨口碑</span>
	        <span class="right"></span>
	        </p>
	        <span>public praise</span>
	    </div>
	    <div class="re text-center index_text">
			<div class="recommend_list inline-block bg1">
				<h4>大众点评</h4>
			</div>
			<div class="recommend_list inline-block bg2">
				<h4>微信朋友圈</h4>
			</div>
			<div class="recommend_list inline-block bg2">
				<h4>新浪微博</h4>
			</div>		
		</div>
		<div class="index_text container">
			<p class="text-center">自2009年始，仕馨月子会所始终立于月子服务前线，历经8年的砥砺前行和经验累积，以饱含赤诚真心的专业姿态，服务了10000多个妈妈科学坐月子，见证她们恢复孕前的健康美丽；凭借经验丰富的科学方式，给予了5000多名宝宝贴心满月呵护，见证他们聪明健康的启航。 这短暂一个月的相伴，带着爱意次第相传，我们听到万千个声音，甚觉欣喜与荣幸，她们说……</p>
		</div>
		<!-- 评论 -->
		<div class="container margin-top">
			<!-- 一个评论的大盒子 -->
			<div class="comment">
				<div class="head_portrait">
					<div class="inline-block">
						<img src="" alt="">
					</div>
				</div>
				<!-- 星星 -->
				<div class="stars">
					<ul class="stars_ul">
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
					</ul>					
				</div>
				<!-- 言论 -->
				<div class="comment_text">
					<p class="small_font">28天的时间一晃而过，在这里育婴室5楼的责任护士子晴、绍兴、冬梅对我们宝宝的贴心照顾，让我......</p>
				</div>				
			</div>

			<div class="comment">
				<div class="head_portrait">
					<div class="inline-block">
						<img src="" alt="">
					</div>
				</div>
				<div class="stars">
					<ul class="stars_ul">
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
						<li>
							<img src="images/index_04.png" class="pre">
						</li>
					</ul>					
				</div>
				<div class="comment_text">
					<p class="small_font">28天的时间一晃而过，在这里育婴室5楼的责任护士子晴、绍兴、冬梅对我们宝宝的贴心照顾，让我......</p>
				</div>				
			</div>			
		</div>
	</div>
	<!-- 点击查看全部 -->
	<div class="re text-center">
		<div class="see inline-block">
			<img src="images/index_50.png" class="pre">
		</div>
	</div>
	<!-- 品牌荣誉 -->
	<div class="title text-center" style="margin-top: 1rem;">
        <p>
		<span class="left"></span>
        <span class="text">品牌荣誉</span>
        <span class="right"></span>
        </p>
        <span>Brand honor</span>
    </div>
    <!--品牌荣誉图片 -->
    <div class="honor_list index_text">
    	<div class="honor_list01 inline-block">
    		<div class="honor_list_img">
    			<img src="images/index_80.jpg" class="pre">
    		</div>
    		<div class="honor_list_img">
    			<img src="images/index_80.jpg" class="pre">
    		</div>
    	</div>
    	<div class="honor_list02 inline-block">
    		<div class="honor_list_img">
    			<img src="images/index_87.jpg" class="pre">
    		</div>
    		<div class="honor_list_img">
    			<img src="images/index_96.jpg" class="pre">
    		</div>
    	</div>
    	<div class="honor_list01 inline-block">
    		<div class="honor_list_img">
    			<img src="images/index_80.jpg" class="pre">
    		</div>
    		<div class="honor_list_img">
    			<img src="images/index_80.jpg" class="pre">
    		</div>
    	</div>
    	<div class="honor_list04 honor_list_img inline-block">
    		<img src="images/index_84.jpg" class="pre">
    	</div>
    </div>	
	<!-- 二维码 -->
	<div class="footer index_text">
		<div class="footer_top">
			<div class="footer_top_center">
				<div class="box_img margin-right">
					<img src="images/index_102.jpg" class="pre">
					<span>关注官方微信</span>
				</div>
				<div class="box_img">
					<img src="images/index_104.jpg" class="pre">
					<span>关注官方微博</span>
				</div>
			</div>
		</div>
	</div>
	<!-- 底部导航 -->
	<div class="index_footer">
		<div class="footer_Unified">
			<div class="Unified_img">
				<img src="images/index_112.png" class="pre">				
			</div>			
			<span class="footer_span">联系电话</span>
		</div>
		<div class="footer_Unified">
			<div class="Unified_img">
				<img src="images/index_109.png" class="pre">				
			</div>			
			<span class="footer_span">预约看店</span>
		</div>
		<div class="footer_Unified" onclick="navigation_show()">
			<div class="Unified_img">
				<img src="images/index_115.png" class="pre">				
			</div>			
			<span class="footer_span">导航</span>
		</div>
	</div>
	<!-- 底部弹窗 -->
	<div class="navigation obj_nav" id="obj_nav">
		<div class="nav_contain inline-block">
			<div class="nav_img">
				<img src="images/index_10.png">
			</div>
			<h4>首页</h4>
		</div>
		<div class="nav_contain inline-block">
			<div class="nav_img">
				<a href="about.php">
						<img class="pre" src="images/index_12.png">
                    </a>
			</div>
			<h4>关于仕馨</h4>
		</div>
		<div class="nav_contain inline-block">
			<div class="nav_img">
				<a href="professionalSystem.php">
					<img class="pre" src="images/index_14.png">
                    </a>
			</div>
			<h4>服务体系</h4>
		</div>
		<div class="nav_contain inline-block">
			<div class="nav_img">
				<a href="branch.php">
						<img class="pre" src="images/index_16.png">
                    </a>
			</div>
			<h4>分店介绍</h4>
		</div>
		<div class="nav_contain inline-block">
			<div class="nav_img">
				<a href="package.php">
						<img class="pre" src="images/index_23.png">
                    </a>
			</div>
			<h4>套餐服务</h4>
		</div>
		<div class="nav_contain inline-block">
			<div class="nav_img">
				<a href="comment.php">
						<img class="pre" src="images/index_25.png">
                    </a>
			</div>
			<h4>妈妈见证</h4>
		</div>
		<div class="nav_contain inline-block">
			<div class="nav_img">
				<a href="news.php">
						<img class="pre" src="images/index_26.png">
                    </a>
			</div>
			<h4>月子咨讯</h4>
		</div>
		<div class="nav_contain inline-block">
			<div class="nav_img">
				<img class="pre" src="images/index_28.png">
			</div>
			<h4>预约参观</h4>
		</div>
		<div class="nav_contain inline-block" onclick="navigation_show()">
			<div class="nav_img">
				<img src="images/index_03.png">
			</div>
			<h4>关闭</h4>
		</div>
	</div>
</div>
	
</body>
</html>
<script>
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        slidesPerView: 1,
        spaceBetween: 30
    });
    var obj_nav=document.getElementById("obj_nav");
	var flag=false;
	function navigation_show(){				
		if(!flag){
			obj_nav.className = "navigation obj_nav";
			flag=true;
		}else{
			obj_nav.className = "navigation";
			flag=false;
		}
	}
	
</script>
<!-- <script src="js/vue-resource.js"></script>
<script src="js/wow.js"></script>
<script>
	// new Vue({
	// 	el:".index_footer",
	// 	data:{

	// 	},
	// 	methods:{
	// 		navigation_click(){

	// 		}
	// 	}
	// });
</script> -->
