<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>北京国信品牌科学评价研究院</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link type="text/css" rel="stylesheet" href="{{ asset('/css/basic.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ asset('/css/n_style.css') }}" />
		<script type="text/javascript" src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				js_menu().initNavMenu( {{ $menuId }} );
			});
		</script>
	</head>	
	<body>
		<!-- left navigator -->
		<div class="wrapper">
			<div class="col_left">
				<div class="m_nav">
					<a><div class="nav_logo"></div></a>
					<div class="nav_menu">
						<div id="lanPos"></div>
						<ul>
							<li><a href="{{ URL('/') }}">首&emsp;&emsp;页</a></li>
							<li><a href="{{ URL('/institude') }}">研&ensp;究&ensp;院</a></li>
							<li><a href="{{ URL('/analyst') }}">分&ensp;析&ensp;师</a></li>
							<li><a href="{{ URL('/model') }}">分析模型</a></li>
							<li><a href="{{ URL('/course')}}">品牌课程</a></li>
							<li><a href="{{ URL('/books') }}">专家著作</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col_top"> 
				<a href="#"><img src="img/word_logo.png" alt="国信评价"></a>
			</div>

			<div class="col_right">
				@yield('main_content')
			</div>

		</div>

		<!-- footer -->
		<div class="footer_nav">
			<div class="footer_wrapper">
				<table>
					<tr>
						<td class="td1">
							<h2>合作机构</h2>
							<ul>
								<li><a href="#">中华商标协会</a></li>
								<li><a href="#">中国名牌杂志社</a></li>
								<li><a href="#">北京珠宝研究院</a></li>
								<li><a href="#">北京建筑装饰协会</a></li>
								<li><a href="#">中国中小企业协会</a></li>
								<li><a href="#">中国科技新闻学会</a></li>
								<li><a href="#">中国科技信息杂志社</a></li>
								<li><a href="#">中金浩资产评估有限公司</a></li>
								<li><a href="#">首都经贸大学中国品牌研究中心</a></li>
								<li><a href="#">北京农业大学品牌数据分析中心</a></li>
							</ul>
						</td>
						<td class="td2">
							<h2>联系方式</h2>
							<ul>
								<li>邮&emsp;&emsp;编：100007</li>
								<li>联系方式：010-84187465&emsp;杨小姐</li>
								<li>课程合作：010-84187365&emsp;赵小姐</li>
								<li>电子邮件：ppfxs@ceobrand.com</li>
								<li>所在地址：北京市东城区东直门北小街</li>
								<li style="text-indent: 5em;">青龙胡同1号歌华大厦1303A室</li>
							</ul>
						</td>
						<td class="td3">
							<h2>@我们</h2>
							<a target="_blank" href="http://weibo.com/u/3856999478"><img src="img/weibo.png"></a>
							<a target="_blank" ><img src="img/wechart.jpg"></a>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<div class="copyright">
								<p>
									北京市公安局朝阳分局备案编号110xxxxxxxxx&ensp;|&ensp;
									京ICP证xxxxxx号&ensp;|&ensp;
									网络文化经营许可证京网文[2015]1234-567号
								</p>
								<p>
									Copyright&ensp;&copy;&ensp;2004-2015&ensp;国信评价&ensp;版权所有
								</p>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</script>
</html>