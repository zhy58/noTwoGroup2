<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>妈妈见证</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<style type="text/css">
		p{
			text-indent: 0;
		}
		.index_text{
			margin-top: 1.5rem;
		}
		.re{
			margin-bottom: 1.5rem;
		}
		.recommend_list{
			width: 4.125rem;
			height: 1.25rem;
			/*margin-right: 0.75rem;*/
		}
		.recommend_list h4{
			font-size: 0.65rem;
			text-align: center;
			line-height: 1.25rem;
			color: white;
		}
		.bg1,.bg2{
			/*background-size: 100%;*/
			
			border-bottom-left-radius: 0.7rem;
			border-top-right-radius: 0.7rem;
			text-align: center;
		}
		.bg1{
			/*background: url("images/index_35.png") no-repeat;*/
			background: #EE8FB3;
			border: 0.05rem solid #EE8FB3;
		}
		.bg2{
			/*background: url("images/index_38.png") no-repeat;*/
			background: #74C5BE;
			border: 0.05rem solid #74C5BE;
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
			font-size: 0.6rem;
			line-height: 0.7rem;
			text-indent: 0rem;
		}
		.PN {
			margin-top: 1rem;
		}
		.prev a,.next a{
			color: #787878;
			padding: 0 0.2rem;
		}
		.HP a,.EP a {
			color: #787878;
		}
		.page a{
			padding: 0.1rem 0.5rem;
			margin: 0 0.3rem;
			background: transparent;
			border-radius: 50%;
			color: #787878;
		}
		.page.cur a{
			background: #64bab1;
			color: #fff;
		}

		.footer{
			height: 9rem;
		}
		.footer_top{
			height: 7rem;
			padding-top: 1.5rem;
		}
		.footer_top_center{
			/*width: 18rem;*/
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
	</style>
</head>
<body>
<?php require_once 'top.php';?>
	<div class="index_comment">
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
			<div class="recommend_list inline-block bg2">
				<h4>视频专区</h4>
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
	<div class="PN text-center">
		<span class="HP"><a href=""><<</a></span>
		<span class="prev"><a href=""><</a></span>
		<span class="page cur"><a href="">1</a></span>
		<span class="page"><a href="">2</a></span>
		<span class="page"><a href="">3</a></span>
		<span class="next"><a href="">></a></span>
		<span class="EP"><a href="">>></a></span>
	</div>

	<!-- 二维码 -->
	<div class="footer">
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
				<span style="font-size: 0.6rem; display: block; margin-top: 0.8rem;">Copyright©2011 仕馨月子会所 （粤ICP备17008523号-1）</span>
			</div>
		</div>
	</div>
</body>
</html>