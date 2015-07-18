@extends('gxpj')
@section('main_content')
<div class="container">
	<div class="enrollment">
		<p id="page_title"><strong>品牌培训课程</strong>&ensp;——&ensp;在线报名</p>
		<hr>
		
		<table col="2">
			<tr>
				<td class="course_c1 first_line" colspan="2"><p>开课信息</p></td>
			</tr>
			<tr>
				<td class="course_c1">费&emsp;&emsp;用：</td>
				<td class="course_c2">
					RMB 2999元/人  （原价<b style="color:red;">xxxx</b>元，超值体验价<b style="color:red;">xxxx</b>元）
				</td>
			</tr>
			<tr>
				<td class="course_c1">开课地址：</td>
				<td class="course_c2">待定</td>
			</tr>
			<tr>
				<td class="course_c1">上课时间：</td>
				<td class="course_c2">201x年xx月xx日</td>
			</tr>
			<tr>
				<td class="course_c1">主办单位：</td>
				<td class="course_c2">北京国信品牌评价科学研究院</td>
			</tr>
			<tr>
				<td class="course_c1">联系电话：</td>
				<td class="course_c2">010-84187365</td>
			</tr>
			<tr>
				<td class="course_c1">联&ensp;系&ensp;人：</td>
				<td class="course_c2">赵小姐</td>
			</tr>
			<tr>
				<td class="course_c1">支付方式：</td>
				<td class="course_c2">线下支付</td>
			</tr>
		</table>
		<form action="#" method="POST" class="form_contact">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<table col="2">
				<tr>
					<td class="course_c1 first_line" colspan="2"><p>报名信息</p></td>
				</tr>
				<tr>
					<td class="course_c1">姓&emsp;&emsp;名：</td>
					<td class="course_c2">
						<input type="text" name="title" class="form-control" required="required" value=""><b>&ensp;*</b>
					</td>
				</tr>
				<tr>
					<td class="course_c1">联系方式：</td>
					<td class="course_c2">
						<input type="text" name="phone" class="form-control" required="required" value=""><b>&ensp;*</b>
					</td>
					<tr>
						<td class="course_c1">公司名称：</td>
						<td class="course_c2">
							<input type="text" name="corp" class="form-control" required="required"  value=""><b>&ensp;*</b>
						</td>
					</tr>
				</tr>
				<tr>
					<td class="course_c1">现任职务：</td>
					<td class="course_c2">
						<input type="text" name="title" class="form-control" required="required"  value=""><b>&ensp;*</b>
					</td>
				</tr>
				
				<tr>
					<td class="course_c1">邮&emsp;&emsp;箱：</td>
					<td class="course_c2">
						<input type="text" name="email" class="form-control" required="required"  value=""><b>&ensp;*</b>
					</td>
				</tr>
				<tr>
					<td class="end_line" colspan="2">
						<button type="submit" class="btn_a btn_big" href="#">提交</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
@endsection