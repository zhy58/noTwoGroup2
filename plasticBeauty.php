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
		.clear{
			clear:both;
		}
		.careSystem_list {
			width:100%;
		}
		.careSystem_list li{
			width:calc(33.3333% - .333rem);
			float: left;
			margin-left: .5rem;
		}
		.careSystem_list li:nth-child(3n+1){
			margin-left:0;
		}
		.careSystem_list li img{
			margin:0;
		}
		li p{
			font-size: .6rem;
			text-align: center;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
			text-indent: 0;
			margin-top: 0;
		}
		.education_content{
			width:100%;
			overflow: hidden;
			margin-top: 1.125rem;
		}
		.education_list{
			width:100%;
			list-style: none;
			margin:0;
			padding: 0;
		}
		.education_list li{
			width: calc(50% - 0.5rem);
			float:left;
			margin:0.3rem 0 0 0;
		}
		.education_list li img{
			width:100%;
			margin:0;
		}
		.img_radius{		
			border-radius:0.2rem;
		}
		.education_list li:nth-child(2n){
			margin-left: 1rem;
		}

		.img_dashed{
			display: inline-block;
			padding:0.25rem 0.25rem 0 0.25rem;
			border:1px dashed #74c5be;
			border-radius:6px; 
		}
		.careSystem_content{
			margin-top: 1.125rem;
		}
	</style>
</head>
<body>
<?php require_once 'top.php';?>
<!-- 头部 header -->
	<header>
		
	</header>
	<!-- 头部结束 end -->
	<!-- 正文内容 -->
	<div class="careSystem_container">

		<div class="container">
		<!-- 文字标题 -->
			<div class="Hf_title text-center">
	            <p>
				<span class="span_border"></span>
	            <span class="text">美容项目</span>
	            <span class="span_border"></span>
	            </p>
	            <span>Beauty project</span>
		    </div>
		    <!-- 新生儿早教图片展览 -->
		    <div class="education_content">
		    	<ul class="education_list text-center">
		    		<li>
		    		  	<span class="img_dashed">
	    					<img class="pre img_radius" src="images/serviceSystem/plasticBeauty/plasticBeauty_03.jpg">
	    				</span>
	    				<h3>面部基础护理</h3>
		    		</li>
		    		<li>
	    				<span class="img_dashed">
	    					<img class="pre img_radius" src="images/serviceSystem/plasticBeauty/plasticBeauty_05.jpg">
	    				</span>
	    				<h3>面部高级抗衰全套护理</h3>
		    		</li>
		    	</ul>
		    </div>
		    <!-- 新生儿早教图片展览结束 end -->
			</div>
		</div>
		<div class="container  clear">
		<!-- 文字标题 -->
			<div class="Hf_title text-center">
	            <p>
				<span class="span_border"></span>
	            <span class="text">形体恢复</span>
	            <span class="span_border"></span>
	            </p>
	            <span>Body recovery</span>
		    </div>
		    <!-- 新生儿护理图片展览 -->
		    <div class="careSystem_content">
		    	<ul class="education_list text-center">
		    		<!-- <li>
	    				<img class="pre" src="images/serviceSystem/careSystem/careSystem_03.jpg">
	    				<p>黄疸监测</p>
		    		</li> -->
		    	</ul>
		    </div>
		    <!-- 新生儿护理图片展览结束 end -->
			</div>
		</div>
	</div>
	<!-- 新生儿护理内容结束 end -->
	<!-- 脚部内容 -->
	<div class="footer">
		
	</div>
	<!-- 脚部内容结束 -->
</body>
<script type="text/javascript">
	window.onload= function(){
		var careSystem_data = [
			{
				"alt":"软光子腰腹部收紧",
				"imgUrl":"images/serviceSystem/plasticBeauty/plasticBeauty_10.jpg"
			},
			{
				"alt":"全身十二经络疏通",
				"imgUrl":"images/serviceSystem/plasticBeauty/plasticBeauty_13.jpg"
			},
			{
				"alt":"仪器盆底肌修复",
				"imgUrl":"images/serviceSystem/plasticBeauty/plasticBeauty_17.jpg"
			},
			{
				"alt":"骨盆矫正",
				"imgUrl":"images/serviceSystem/plasticBeauty/plasticBeauty_18.jpg"
			}
		];
		var education_data = [
			{
				"alt":"黄疸监测",
				"imgUrl":"images/serviceSystem/careSystem/careSystem_27.jpg"
			},
			{
				"alt":"五官护理",
				"imgUrl":"images/serviceSystem/careSystem/careSystem_29.jpg"
			}
		];
		var Cobj  = {
			'ulClassName':'careSystem_list',
			'F_data':careSystem_data,
		}
		var Eobj  = {
			'ulClassName':'education_list',
			'F_data':careSystem_data,
		}
		Create_li_img_hf(Eobj);
		// Create_li_img_hf(Eobj);
	}
	function Create_li_img_hf(obj){
		var list = document.getElementsByClassName(obj.ulClassName)[1];
		var create_li_str = '';
		var data = obj.F_data;
		for(var i = 0;i<data.length;i++){
			create_li_str +='<li>'+
		    				'<img class="pre" src="'+data[i].imgUrl+'">'+
		    				'<h3>'+data[i].alt+'</h3>'+
		    				'</li>';
		}
		list.innerHTML = create_li_str;
	}
</script>
</html>