<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/global.css">
	<style>
		.obj_nav{
			display: block !important;
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
			height: 11.25rem;
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
			background: #fcfcfc;
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
		.footer_bottom{
			position:relative;
			height: auto;
		}		
	</style>
</head>
<body>
<div class="footer_bottom">
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
		<div class="navigation" id="obj_nav">
			<div class="nav_contain inline-block">
				<div class="nav_img">
					<img src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</div>
			<div class="nav_contain inline-block">
				<div class="nav_img">
					<img src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</div>
			<div class="nav_contain inline-block">
				<div class="nav_img">
					<img src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</div>
			<div class="nav_contain inline-block">
				<div class="nav_img">
					<img src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</div>
			<div class="nav_contain inline-block">
				<div class="nav_img">
					<img src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</div>
			<div class="nav_contain inline-block">
				<div class="nav_img">
					<img src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</div>
			<div class="nav_contain inline-block">
				<div class="nav_img">
					<img src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</div>
			<div class="nav_contain inline-block">
				<div class="nav_img">
					<img src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</div>
			<div class="nav_contain inline-block">
				<div class="nav_img">
					<img src="images/index_10.png">
				</div>
				<h4>首页</h4>
			</div>
		</div>
</div>
</body>
</html>
<script>
	var flag=false;
	function navigation_show(){
		var obj_nav=document.getElementById("obj_nav");		
		if(!flag){
			obj_nav.className = "navigation obj_nav";
			flag=true;
		}else{
			obj_nav.className = "navigation";
			flag=false;
		}
	}
</script>