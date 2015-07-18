@extends('gxpj')

@section('main_content')
<!-- 首页展示大图 -->
<link rel="stylesheet" href="{{ asset('/css/tos_style.css') }}" />
<div class="tos js_body">
	<div class="banner">
		<div class="wrap">
			<div class="banner_box js_banner_box">
				<!-- 图片栏 -->
				<ul class="banner_pic">
					<li><a href="#"><div class="slide_pic slide_pic_1"></div></a></li>
					<li><a href="#"><div class="slide_pic slide_pic_2"></div></a></li>
					<li><a href="#"><div class="slide_pic slide_pic_3"></div></a></li>
					<li><a href="#"><div class="slide_pic slide_pic_4"></div></a></li>
					<li><a href="#"><div class="slide_pic slide_pic_5"></div></a></li>
					<li><a href="#"><div class="slide_pic slide_pic_6"></div></a></li>
					<li><a href="#"><div class="slide_pic slide_pic_7"></div></a></li>
				</ul>
				<!-- 下标 -->
				<div class="banner_cur js_banner_cur">
					<a title="第1张" href="javascript:;">1</a>
					<a title="第2张" href="javascript:;">2</a>
					<a title="第3张" href="javascript:;">3</a>
					<a title="第4张" href="javascript:;">4</a>
					<a title="第5张" href="javascript:;">5</a>
					<a title="第6张" href="javascript:;">6</a>
					<a title="第7张" href="javascript:;">7</a>
				</div>
				<!-- 左右按钮 -->
				<a class="banner_prev js_slider_prev" title="上一张" href="javascript:;">&lt;</a>
				<a class="banner_next js_slider_next" title="下一张" href="javascript:;">&gt;</a>
			</div>
		</div>
	</div>
	<div class="banner_txt js_banner_txt">
		<div class="wrap">
			<!--文字描述-->
			<ul>
				<li>
					<p><a href="institude">北京国信品牌评价科学研究院作为国内领先的第三方品牌评价研究、咨询、培训机构，通过培养品牌分析师队伍，指导其运用品牌评价工具对企业及非营利组织的品牌设计、品牌传播、品牌管理、品牌经营全过程进行分析、评价与咨询。研究院还为品牌连锁经营、品牌投融资、品牌并购重组业务提供定制化的品牌金融解决方案。</a></p>
				</li>
			</ul>
		</div>
	</div>
</div>

<script src="{{ asset('/js/tos_slider.js') }}"></script>
<script>
	$(document).ready(function() {
		var si = Slider(
			$('.js_banner_box'),
			$('.js_slider_prev'),
			$('.js_slider_next'),
			$('.js_banner_cur a'),
			$('.js_banner_txt ul')
		);
		si.setPlayInterval(3000);
		si.startAutoPlay();
	});
</script>

@endsection