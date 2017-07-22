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
		h3{
			color: #939495;
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
		    <!-- 分店介绍 -->
		    <div class="branch_content">
		    	<ul class="branch_list">
		    		<!-- <li>
		    			<a href="javascript:;">
		    				<img class="pre" src="images/professionalSystem_03.jpg">
		    			</a>
		    			<h3>新生儿健康护理</h3>
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
				"alt":"新生儿健康护理",
				"imgUrl":"images/professionalSystem_03.jpg"
			},
			{
				"alt":"中医调理保健",
				"imgUrl":"images/professionalSystem_05.jpg"
			},
			{
				"alt":"产后妈妈康复",
				"imgUrl":"images/professionalSystem_09.jpg"
			},
			{
				"alt":"母婴专业营养",
				"imgUrl":"images/professionalSystem_10.jpg"
			},
			{
				"alt":"产后妈妈塑形美丽",
				"imgUrl":"images/professionalSystem_13.jpg"
			},
			{
				"alt":"新生儿早期智力开发",
				"imgUrl":"images/professionalSystem_14.jpg"
			},
			{
				"alt":"立体式院感防御",
				"imgUrl":"images/professionalSystem_17.jpg"
			},
			{
				"alt":"全天候无缝安保体系",
				"imgUrl":"images/professionalSystem_18.jpg"
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
		    				'<h3>'+data[i].alt+'</h3>'+
		    				'</li>';
		}
		hf_list.innerHTML = create_li_str;
	}
</script>
</html>