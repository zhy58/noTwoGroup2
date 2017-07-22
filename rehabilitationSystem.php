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
			width: calc(50% - 0.8rem);
			float:left;
			/*width:8.25rem;*/
			margin:0.3rem 0 0 0;
		}
		.branch_list li a img{
			height:100%;
			margin:0;
		}
		.branch_list li:nth-child(2n){
			margin-left: 1rem;
		}
		.branch_list1{
			width:100%;
			list-style: none;
			margin:0;
			padding: 0;
		}
		.branch_list1 li{
			width: calc(50% - 0.2375rem);
			float:left;
			/*width:8.25rem;*/
			margin:0.3rem 0 0 0;
		}
		.branch_list1 li a img{
			height:100%;
			margin:0;
		}
		.branch_list1 li:nth-child(2n){
			margin-left: 0.475rem;
		}
		.branch_list2 li{
			width: calc(33.33333333% - 0.25rem);
			float:left;
			/*width:8.25rem;*/
			margin:0.3rem 0 0 0;
		}
		.branch_list2 li a img{
			height:100%;
			margin:0;
		}
		.branch_list2 li:nth-child(n){
			margin-right: 0.25rem;
		}
		.text_overflow{
			/*color: #585757;*/
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
		}
		/*.branch_list1 h3{
			text-align: left;
		}*/
		.branch_list1 h5{
			font-size: 0.3rem;
		    color: #3a3a3a;
		    font-weight: normal;
		}
		.border-radius{
			border: 1px dashed #74c5be;
			border-radius: 6px;
			padding: 0.2rem;
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
	            <span class="text">通乳服务</span>
	            <span class="right"></span>
	            </p>
	            <span>Milk services</span>
		    </div>
		    <!-- 通乳服务 -->
		    <div class="branch_content">
		    	<div class="milkServices border-radius">
		    		<img src="images/serviceSystem/rehabilitationSystem/rehabilitationSystem_03.jpg" alt="" class="pre">
		    	</div>
		    </div>
		    <!-- 通乳服务 end -->

			<!-- 文字标题 -->
		    <div class="title text-center">
	            <p>
				<span class="left"></span>
	            <span class="text">专家查房</span>
	            <span class="right"></span>
	            </p>
	            <span>Specialist ward round</span>
		    </div>
		    <!-- 专家查房 -->
		    <div class="branch_content">
		    	<ul class="branch_list branch_Specialist">
		    	</ul>
		    </div>
		    <!-- 专家查房 end -->

		    <!-- 文字标题 -->
		    <div class="title text-center">
	            <p>
				<span class="left" style="margin-left: 4.2rem"></span>
	            <span class="text">身体功能性修复</span>
	            <span class="right" style="margin-left: -5.7rem;"></span>
	            </p>
	            <span>Physical function repair</span>
		    </div>
		    <!-- 身体功能性修复 -->
		    <div class="branch_content">
		    	<ul class="branch_list1 branch_repair">
		    	</ul>
		    </div>
		    <!-- 身体功能性修复 end -->

		    <!-- 文字标题 -->
		    <div class="title text-center">
	            <p>
				<span class="left" style="margin-left: 3.7rem"></span>
	            <span class="text">中医营养调理</span>
	            <span class="right" style="margin-left: -5.3rem;"></span>
	            </p>
	            <span>Nutrition regulate</span>
		    </div>
		    <!-- 中医营养调理 -->
		    <div class="branch_content">
		    	<ul class="branch_list branch_regulate">
		    	</ul>
		    </div>
		    <!-- 中医营养调理 end -->

		    <!-- 文字标题 -->
		    <div class="title text-center">
	            <p>
				<span class="left"></span>
	            <span class="text">生活护理</span>
	            <span class="right"></span>
	            </p>
	            <span>Life care</span>
		    </div>
		    <!-- 生活护理 -->
		    <div class="branch_content">
		    	<ul class="branch_list2 branch_care">
		    	</ul>
		    </div>
		    <!-- 生活护理 end -->

		    <!-- 文字标题 -->
		    <div class="title text-center">
	            <p>
				<span class="left" style="margin-left: 3.7rem"></span>
	            <span class="text">中医保健调理</span>
	            <span class="right" style="margin-left: -5rem;"></span>
	            </p>
	            <span>Chinese Medicine</span>
		    </div>
			<!-- 中医保健调理 -->
		    <div class="branch_content">
		    	<ul class="branch_list1 branch_Medicine">
		    	</ul>
		    </div>
		    <!-- 中医保健调理 end -->

		    <!-- 文字标题 -->
		    <div class="title text-center">
	            <p>
				<span class="left"></span>
	            <span class="text">美容项目</span>
	            <span class="right"></span>
	            </p>
	            <span>Beauty project</span>
		    </div>
		    <!-- 美容项目 -->
		    <div class="branch_content">
		    	<ul class="branch_list branch_Beauty">
		    	</ul>
		    </div>
		    <!-- 美容项目 end -->

		    <!-- 文字标题 -->
		    <div class="title text-center">
	            <p>
				<span class="left"></span>
	            <span class="text">形体恢复</span>
	            <span class="right"></span>
	            </p>
	            <span>Body recovery</span>
		    </div>
			<!-- 中医保健调理 -->
		    <div class="branch_content">
		    	<ul class="branch_list1 branch_recovery">
		    	</ul>
		    </div>
		    <!-- 中医保健调理 end -->

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

		/*专家查房*/
		var branch_Specialist = [
			{
				"alt":"营养师查房",
				"border":"border-radius",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_07.jpg"
			},
			{
				"alt":"专家查房(中医专家，产科专家)",
				"text":"text_overflow",
				"border":"border-radius",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_09.jpg"
			}
		]
		/*专家查房 end---*/

		/*身体功能性修复*/
		var branch_repair = [
			{
				"alt":"仪器子宫修复",
				"h5":"Instrument uterine repair",
				"text":"text-left",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_14.jpg"
			},
			{
				"alt":"红外线艾灸",
				"h5":"Infrared moxibustion",
				"text":"text-left",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_16.jpg"
			}
		]
		/*身体功能性修复 end--*/

		/*中医营养调理*/
		var branch_regulate = [
			{
				"alt":"药膳调理",
				"border":"border-radius",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_21.jpg"
			},
			{
				"alt":"高档炖品",
				"border":"border-radius",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_23.jpg"
			}
		]
		/*中医营养调理 end--*/

		/*生活护理*/
		var branch_care = [
			{
				"alt":"胸部保养",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_27.jpg"
			},
			{
				"alt":"特制中药水擦澡",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_29.jpg"
			},
			{
				"alt":"中药沐浴",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_31.jpg"
			},
			{
				"alt":"中药头部清洁",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_36.jpg"
			},
			{
				"alt":"体质评估分析",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_37.jpg"
			},
			{
				"alt":"动态观测和伤口护理",
				"text":"text_overflow",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_38.jpg"
			},
		]
		/*生活护理 end--*/

		/*中医保健调理*/
		var branch_Medicine = [
			{
				"alt":"脾胃双调",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_42.jpg"
			},
			{
				"alt":"局部中医推拿",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_44.jpg"
			},
			{
				"alt":"头颈舒压",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_49.jpg"
			},
			{
				"alt":"中药封包",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_51.jpg"
			}
		]
		/*中医保健调理 end--*/

		/*美容项目*/
		var branch_Beauty = [
			{
				"alt":"面部基础护理",
				"border":"border-radius",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_55.jpg"
			},
			{
				"alt":"面部高级抗衰全套护理",
				"border":"border-radius",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_57.jpg"
			}
		]
		/*美容项目 end--*/

		/*中医保健调理*/
		var branch_recovery = [
			{
				"alt":"软光子腰腹部收紧",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_61.jpg"
			},
			{
				"alt":"全身十二经络疏通",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_67.jpg"
			},
			{
				"alt":"仪器盆底肌修复",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_68.jpg"
			},
			{
				"alt":"骨盆矫正",
				"imgUrl":"images/serviceSystem/rehabilitationSystem/rehabilitationSystem_64.jpg"
			}
		]
		/*中医保健调理 end--*/
		
		var Specialist  = {
			'ulClassName':'branch_Specialist',
			'F_data':branch_Specialist
		}
		var repair  = {
			'ulClassName':'branch_repair',
			'F_data':branch_repair
		}
		var regulate  = {
			'ulClassName':'branch_regulate',
			'F_data':branch_regulate
		}
		var care  = {
			'ulClassName':'branch_care',
			'F_data':branch_care
		}
		var Medicine  = {
			'ulClassName':'branch_Medicine',
			'F_data':branch_Medicine
		}
		var Beauty  = {
			'ulClassName':'branch_Beauty',
			'F_data':branch_Beauty
		}
		var recovery  = {
			'ulClassName':'branch_recovery',
			'F_data':branch_recovery
		}
		Create_li_img_hf(Specialist);
		Create_li_img_repair(repair);
		Create_li_img_hf(regulate);
		Create_li_img_hf(care);
		Create_li_img_hf(Medicine);
		Create_li_img_hf(Beauty);
		Create_li_img_hf(recovery);
	}
	function Create_li_img_hf(obj){
		var hf_list = document.getElementsByClassName(obj.ulClassName)[0];
		var create_li_str = '';
		var data = obj.F_data;
		for(var i = 0;i<data.length;i++){
			create_li_str +='<li class="'+null+'">'+
		    				'<a href="javascript:;">'+
		    				'<img class="pre '+data[i].border+'" src="'+data[i].imgUrl+'">'+
		    				'</a>'+
		    				'<h3 class="'+data[i].text+'"">'+data[i].alt+'</h3>'+
		    				'</li>';
		}
		hf_list.innerHTML = create_li_str;
	}
	function Create_li_img_repair(obj){
		var hf_list = document.getElementsByClassName(obj.ulClassName)[0];
		var create_li_str = '';
		var data = obj.F_data;
		for(var i = 0;i<data.length;i++){
			create_li_str +='<li class="'+null+'">'+
		    				'<a href="javascript:;">'+
		    				'<img class="pre" src="'+data[i].imgUrl+'">'+
		    				'</a>'+
		    				'<h3 class="'+data[i].text+'"">'+data[i].alt+'</h3>'+
		    				'<h5>'+data[i].h5+'</h5>'+
		    				'</li>';
		}
		hf_list.innerHTML = create_li_str;
	}
</script>
</html>