<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/global.css">
	<style type="text/css">
		html,body{
			margin:0;
			padding: 0;
		}
		.branch_container{
			width:100%;
		}
		.branch_content{
			width:100%;
			overflow: hidden;
			margin-top: 1.125rem;
		}
		.branch_list{
			width:100%;
			list-style: none;
			margin:0;
			padding: 0;
		}
		.branch_list li{
			width: calc(50% - 0.2375rem);
			float:left;
			/*width:8.25rem;*/
			margin:0.3rem 0 0 0;
		}
		.branch_list li a img{
			height:100%;
			margin:0;
		}
		.branch_list li:nth-child(2n){
			margin-left: 0.475rem;
		}
	</style>
</head>
<body>
<?php require_once 'top.php';?>
	<!-- 头部 header -->
	<header>
		
	</header>
	<!-- 头部结束 end -->
	<!-- 分店正文内容 branch_container-->
	<div class="branch_container">
		<div class="container">
		<!-- 文字标题 -->
			<div class="title text-center">
	            <p>
				<span class="left"></span>
	            <span class="text">分店介绍</span>
	            <span class="right"></span>
	            </p>
	            <span>Branch</span>
		    </div>
		    <!-- 分店介绍 -->
		    <div class="branch_content">
		    	<ul class="branch_list">
		    		<!-- <li>
		    			<a href="javascript:;">
		    				<img class="pre" src="images/branch_03.jpg">
		    			</a>
		    		</li> -->
		    	</ul>
		    </div>
		    <!-- 分店介绍 end -->
		</div>
	</div>
	<!-- 分店内容结束 end -->
	<!-- 脚部内容 -->
	<div class="footer">
		
	</div>
	<!-- 脚部内容结束 -->
</body>
<script type="text/javascript">
	window.onload= function(){
		var branch_data = [
			{
				"alt":"云山店",
				"imgUrl":"images/branch_03.jpg"
			},
			{
				"alt":"云山店",
				"imgUrl":"images/branch_05.jpg"
			},
			{
				"alt":"云山店",
				"imgUrl":"images/branch_09.jpg"
			},
			{
				"alt":"云山店",
				"imgUrl":"images/branch_10.jpg"
			},
			{
				"alt":"云山店",
				"imgUrl":"images/branch_13.jpg"
			},
			{
				"alt":"云山店",
				"imgUrl":"images/branch_14.jpg"
			}
		];
		var obj  = {
			'ulClassName':'branch_list',
			'F_data':branch_data
		}
		
		Create_li_img_hf(obj);
	}
	function Create_li_img_hf(obj){
		var hf_list = document.getElementsByClassName(obj.ulClassName)[0];
		var create_li_str = '';
		var data = obj.F_data;
		for(var i = 0;i<data.length;i++){
			create_li_str +='<li class="'+null+'">'+
		    				'<a href="javascript:;">'+
		    				'<img class="pre" src="'+data[i].imgUrl+'">'+
		    				'</a>'+
		    				'</li>';
		}
		hf_list.innerHTML = create_li_str;
	}
</script>
</html>