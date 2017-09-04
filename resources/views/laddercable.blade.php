@extends('master')

@section('container')
<div class="row" style="margin-top: 15px;">
	<div class="col-9">
		<h4>نردبان کابل</h4>
		<p>مزییتی که نردبان کابل نسبت به سینی کابل دارد این است که سامان دهی کابل ها در آن ها راحت تر و محکمتر است. به طور معمول در مسیر های عمودی از نردبان کابل استفاده می شود. البته انتخاب نردبان کابل یا سینی کابل وابسته به شرایط محیط است.</p>
	</div>
	<div class="col-3">
		<img class="img-fluid" src="images/6.jpg">
	</div>
</div>
<hr>
<div style="margin: 90px 0px;">
	<p class="display-4 text-center" style="font-size: 2rem;">
		مشخصات فنی نردبان کابل
	</p>
	<table class="table table-bordered table-hover text-center">
		<tr>
			<td>ضخامت <small>(ورق)</small></td>
			<td>{{persianumber("0.6 - 3")}}  <small>(میلیمتر)</small></td>
		</tr>
		<tr>
			<td>عرض <small>(نردبان)</small></td>
			<td>{{persianumber("5 - 90")}}  <small>(سانتی متر)</small></td>
		</tr>
		<tr>
			<td>پانچ پله <small>(سوراخ)</small></td>
			<td>CNC</td>
		</tr>
		<tr>
			<td>طول نردبان <small>(شاخه)</small></td>
			<td>شاخه های {{persianumber("2")}} یا {{persianumber("3")}} متری</td>
		</tr>
		<tr>
			<td>لبه نردبان</td>
			<td>برحسب سفارش {{persianumber("4")}} تا {{persianumber("...")}} <small>(سانتی متر)</small></td>
		</tr>
		<tr>
			<td>تعداد خم</td>
			<td>{{persianumber("4")}} یا {{persianumber("6")}}  خم</td>
		</tr>
		<tr>
			<td>جنس ورق</td>
			<!-- <td>گالوانیزه - فولادی - استیل</td> -->
			<td>گالوانیزه</td>
		</tr>
		<tr>
			<td>روکش ورق</td>
			<td>فابریک - آبکاری گرم - رنگ کوره ایی</td>
		</tr>
	</table>
	<div class="alert alert-success">
		در صورت نیاز به هر گونه مشاوره جهت انتخاب محصول می توانید با دفتر فروش گروه کبیر <a href="/تماس-با-ما" class="alert-link">تماس</a> بگیرید.
	</div>
</div>
<hr>
<div style="margin: 90px 0px;">
	<p class="display-4 text-center" style="font-size: 2rem;">
		متعلقات نردبان کابل
	</p>
	<p>
		متعلقات نردبان کابل به سه دسته اصلی <strong style="color: #155724;">اتصلات (رابط)</strong>، <strong style="color: #155724;">نگهدارنده (ساپورت)</strong> و <strong style="color: #155724;">تبدیلات</strong> تقسیم می شود. برخی از اقلام معمول این دو دسته به صورت زیر است:
	</p>
	<table class="table text-center table-hover table-bordered">
		<tr>
			<td>اتصالات</td>
			<td>رابط، زانویی ({{persianumber("45")}} و {{persianumber("90")}} درجه)، زانویی عمودی قابل  تنظیم، سه راهی، چهار راهی</td>
		</tr>
		<tr>
			<td>نگهدارنده</td>
			<td>ساپورت سقفی، ساپورت لچکی شکل، براکت، ساپورت زمینی</td>
		</tr>
		<tr>
			<td>تبدیلات</td>
			<td>کاهشی یا افزایشی <small>(به طور مثال تبدیل {{persianumber("20")}} به {{persianumber("30")}})</small></td>
		</tr>
	</table>
	<div class="alert alert-success">
		در صورت نیاز به هر گونه مشاوره جهت انتخاب محصول می توانید با دفتر فروش گروه کبیر <a href="/تماس-با-ما" class="alert-link">تماس</a> بگیرید.
	</div>
</div>

@endsection