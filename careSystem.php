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
		.careSystem_content{
			margin-top: 1.125rem;
		}
		li h3{
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
			width: calc(50% - 0.2375rem);
			float:left;
			/*width:8.25rem;*/
			margin:0.3rem 0 0 0;
		}
		.education_list li img{
			height:100%;
			margin:0;
		}
		.education_list li:nth-child(2n){
			margin-left: 0.475rem;
		}
		.careSystem_big_div{
			width:100%;
			padding-top: 2rem;
			overflow: hidden;
			position: relative;
		}
		.careSystem_big_div_word{
			color:#fff;
			position: absolute;
			top:31%;
			left:4%;
		}
		.careSystem_big_div_word h3{
			margin-top:1.3rem;
			color:#fff;
			text-align: normal;
			font-size: 0.8rem;
			padding-left: .725rem;
			line-height: 1rem;
		}
		.careSystem_big_div_word p{
			margin-top:.5rem; 
			max-width: 5.75rem;
			line-height: 1rem;
			text-indent: 0;
			font-size: .6rem;
			margin-left: 0.2rem;
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
	            <span class="text">宝宝日常专业护理</span>
	            <span class="span_border"></span>
	            </p>
	            <span>Baby's daily professional care</span>
		    </div>
		    <!-- 图片展览 -->
		    <div class="careSystem_content">
		    	<ul class="careSystem_list text-center">
		    		<!-- <li>
	    				<img class="pre" src="images/careSystem_03.jpg">
	    				<p>文字</p>
		    		</li> -->
		    	</ul>
		    </div>
		    <!-- 图片展览结束 end -->
			</div>
		</div>
		<div class="careSystem_big_div">
			<img class="pre" src="images/careSystem_24.jpg">
			<div class="careSystem_big_div_word">
				<h3>儿科专家查房</h3>
				<p>Paediatrician Ward round</p>
			</div>
		</div>
		<div class="container clear">
		<!-- 文字标题 -->
			<div class="Hf_title text-center">
	            <p>
				<span class="span_border"></span>
	            <span class="text">宝宝日常专业护理</span>
	            <span class="span_border"></span>
	            </p>
	            <span>Baby's daily professional care</span>
		    </div>
		    <!-- 图片展览 -->
		    <div class="education_content">
		    	<ul class="education_list text-center">
		    		<!-- <li>
	    				<img class="pre" src="images/careSystem_03.jpg">
	    				<h3></h3>
		    		</li> -->
		    	</ul>
		    </div>
		    <!-- 图片展览结束 end -->
			</div>
		</div>
	</div>
	<!-- 正文内容结束 end -->
	<!-- 脚部内容 -->
	<div class="footer">
		
	</div>
	<!-- 脚部内容结束 -->
</body>
<script type="text/javascript">
	window.onload= function(){
		var careSystem_data = [
			{
				"alt":"黄疸监测",
				"imgUrl":"images/careSystem_03.jpg"
			},
			{
				"alt":"五官护理",
				"imgUrl":"images/careSystem_05.jpg"
			},
			{
				"alt":"红臀监测",
				"imgUrl":"images/careSystem_07.jpg"
			},
			{
				"alt":"脐部护理",
				"imgUrl":"images/careSystem_12.jpg"
			},
			{
				"alt":"入离院健康评估",
				"imgUrl":"images/careSystem_14.jpg"
			},
			{
				"alt":"宝宝就医提醒",
				"imgUrl":"images/careSystem_18.jpg"
			}
			,
			{
				"alt":"24小时育婴托管服务",
				"imgUrl":"images/careSystem_19.jpg"
			}
			,
			{
				"alt":"24小时宝宝观察",
				"imgUrl":"images/careSystem_20.jpg"
			}
		];
		var education_data = [
			{
				"alt":"黄疸监测",
				"imgUrl":"images/careSystem_27.jpg"
			},
			{
				"alt":"五官护理",
				"imgUrl":"images/careSystem_29.jpg"
			},
			{
				"alt":"红臀监测",
				"imgUrl":"images/careSystem_34.jpg"
			},
			{
				"alt":"脐部护理",
				"imgUrl":"images/careSystem_36.jpg"
			},
			{
				"alt":"入离院健康评估",
				"imgUrl":"images/careSystem_40.jpg"
			},
			{
				"alt":"宝宝就医提醒",
				"imgUrl":"images/careSystem_41.jpg"
			}
			,
			{
				"alt":"24小时育婴托管服务",
				"imgUrl":"images/careSystem_44.jpg"
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
		Create_li_img_hf(Eobj);
	}
	function Create_li_img_hf(obj){
		var list = document.getElementsByClassName(obj.ulClassName)[0];
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