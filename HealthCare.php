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
		.careSystem_content{
			margin-top: 1.125rem;
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
			width: calc(50% - 0.3rem);
			float:left;
			margin:0.3rem 0 0 0;
		}
		.education_list li img{
			width:100%;
			border-radius:6px;
			margin:0;
		}
		.education_list li:nth-child(2n){
			margin-left: 0.475rem;
		}

		.img_dashed{
			display:inline-block;
			padding:0.25rem 0.25rem 0 0.25rem;
			border:1px dashed #74c5be;
			border-radius:6px; 
		}
	</style>
</head>
<body>
<?php require_once 'top.php';?>
<!-- 头部 header -->
	<header>
		
	</header>
	<!-- 头部结束 end -->
	<!-- 新生儿护理正文内容 branch_container-->
	<div class="careSystem_container">

		<div class="container">
		<!-- 文字标题 -->
			<div class="Hf_title text-center">
	            <p>
				<span class="span_border"></span>
	            <span class="text">中医营养调理</span>
	            <span class="span_border"></span>
	            </p>
	            <span>Nutrition regulate</span>
		    </div>
		    <!-- 新生儿早教图片展览 -->
		    <div class="education_content">
		    	<ul class="education_list text-center">
		    		<li>
		    		  	<span class="img_dashed">
	    					<img class="pre" src="images/serviceSystem/HealthCare/HealthCare_03.jpg">
	    				</span>
	    				<h3>药善调理</h3>
		    		</li>
		    		<li>
	    				<span class="img_dashed">
	    					<img class="pre" src="images/serviceSystem/HealthCare/HealthCare_05.jpg">
	    				</span>
	    				<h3>高档炖品</h3>
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
	            <span class="text">生活护理</span>
	            <span class="span_border"></span>
	            </p>
	            <span>Life care</span>
		    </div>
		    <!-- 新生儿护理图片展览 -->
		    <div class="careSystem_content">
		    	<ul class="careSystem_list text-center">
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
				"alt":"局部中医推拿",
				"imgUrl":"images/serviceSystem/HealthCare/HealthCare_10.jpg"
			},
			{
				"alt":"脾胃双调",
				"imgUrl":"images/serviceSystem/HealthCare/HealthCare_12.jpg"
			},
			{
				"alt":"头颈舒压",
				"imgUrl":"images/serviceSystem/HealthCare/HealthCare_14.jpg"
			},
			{
				"alt":"中药封包",
				"imgUrl":"images/serviceSystem/HealthCare/HealthCare_19.jpg"
			},
			{
				"alt":"中药头部清洁",
				"imgUrl":"images/serviceSystem/HealthCare/HealthCare_20.jpg"
			},
			{
				"alt":"特制中药水擦澡",
				"imgUrl":"images/serviceSystem/HealthCare/HealthCare_21.jpg"
			}
			,
			{
				"alt":"中药沐浴",
				"imgUrl":"images/serviceSystem/HealthCare/HealthCare_25.jpg"
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
			'F_data':education_data,
		}
		Create_li_img_hf(Cobj);
		// Create_li_img_hf(Eobj);
	}
	function Create_li_img_hf(obj){
		var list = document.getElementsByClassName(obj.ulClassName)[0];
		var create_li_str = '';
		var data = obj.F_data;
		for(var i = 0;i<data.length;i++){
			create_li_str +='<li>'+
							'<span>'+
		    				'<img class="pre" src="'+data[i].imgUrl+'">'+
		    				'</span>'+
		    				'<h3>'+data[i].alt+'</h3>'+
		    				'</li>';
		}
		list.innerHTML = create_li_str;
		var h3 = list.getElementsByTagName('img');
		console.log(list);
	}
</script>
</html>