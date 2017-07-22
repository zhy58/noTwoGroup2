<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>月子资讯-母婴知识</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/tablist.css">
	<script src="js/jquery.js"></script>
</head>
<body>
<?php require_once 'top.php';?>
	<div class="container">
		<ul class="list_txt">
			<li class="list_txt_li">
				<a href="javascript:;">
					备孕
					<i class="icon"></i>
				</a>
				<div class="list_txt_li_con">
					<a href="article.php">认识仕馨认识仕馨认识仕馨</a>
					<a href="article.php">认识仕馨认识仕馨认识仕馨</a>
					<a href="article.php">认识仕馨认识仕馨认识仕馨</a>
					<a href="article.php">认识仕馨认识仕馨认识仕馨</a>
					<a href="article.php">认识仕馨认识仕馨认识仕馨</a>
					<a href="article.php">认识仕馨认识仕馨认识仕馨</a>
				</div>
			</li>
			<li class="list_txt_li">
				<a href="javascript:;">
					孕期
					<i class="icon"></i>
				</a>
				<div class="list_txt_li_con">
					22
				</div>
			</li>
			<li class="list_txt_li">
				<a href="javascript:;">
					分娩
					<i class="icon"></i>
				</a>
				<div class="list_txt_li_con">
					33
				</div>
			</li>
			<li class="list_txt_li">
				<a href="javascript:;">
					0-1岁
					<i class="icon"></i>
				</a>
				<div class="list_txt_li_con">
					44
				</div>
			</li>
			<li class="list_txt_li">
				<a href="javascript:;">
					分娩
					<i class="icon"></i>
				</a>
				<div class="list_txt_li_con">
					33
				</div>
			</li>
			<li class="list_txt_li">
				<a href="javascript:;">
					0-1岁
					<i class="icon"></i>
				</a>
				<div class="list_txt_li_con">
					44
				</div>
			</li>
		</ul>
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

	<script>
		$(function() {
			$(".list_txt .list_txt_li a").click(function() {
				$(".list_txt .active .list_txt_li_con").slideUp();
				$(".list_txt .list_txt_li").removeClass("active");
				if($(this).next(".list_txt_li_con").is(":hidden")){
					$(this).parent().addClass("active").find(".list_txt_li_con").slideDown();
				}
			})
		})
	</script>
</body>
</html>