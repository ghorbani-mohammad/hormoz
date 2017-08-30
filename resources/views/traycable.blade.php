@extends('master')

@section('container')
<div class="row" style="margin-top: 15px;">
	<div class="col-9">
		<h4>سینی کابل</h4>
		<p style="font-size: .9rem;">
			از سینی کابل برای نظم دهی به کابل ها استفاده می شود. در تصویر مقابل یک سینی کابل را مشاهده می کنید که در آن تعدادی کابل قرار گرفته است. سینی کابل علاوه بر نظم دهی برای محافظت از کابل ها نیز استفاده می شود. طبق استانداردهای جدید ساختمانی استفاده از سینی کابل برای کابل ها الزامی است. 
		</p>
	</div>
	<div class="col-3">
		<img class="img-fluid" src="images/4.jpg">
	</div>
</div>
<hr>
<div style="margin: 90px 0px;">
	<p class="display-4 text-center" style="font-size: 2rem;">
		انواع سینی کابل
	</p>

	<table class="table table-bordered table-hover">
		<tr>
			<td>سینی کابل سرد (فابریک)</td>
			<td>سینی کابل گرم (آبکاری شده)</td>
			<td>سینی کابل بدون پانچ (تراکینگ)</td>
			<td>سینی کابل با رنگ کوره ایی</td>
		</tr>
	</table>
	<div class="alert alert-primary">
		{{persianumber("1")}}. از <strong>سینی کابل گرم</strong> معمولا در مناطقی که دارای رطوبت غیر معمول است استفاده می شود <br>
		{{persianumber("2")}}. از <strong>سینی کابل های بدون پانچ</strong> در فضاهای باز که نیاز به بیشترین محافظت از کابل وجود دارد استفاده می شود
	</div>
</div>
<hr>
<div style="margin: 90px 0px;">
	<p class="display-4 text-center" style="font-size: 2rem;">
		مشخصات فنی سینی کابل
	</p>
	<table class="table table-bordered table-hover text-center">
		<tr>
			<td>ضخامت <small>(ورق)</small></td>
			<td>{{persianumber("0.5 - 2")}}  <small>(میلیمتر)</small></td>
		</tr>
		<tr>
			<td>عرض <small>(سینی)</small></td>
			<td>{{persianumber("5 - 70")}}  <small>(سانتی متر)</small></td>
		</tr>
		<tr>
			<td>پانچ <small>(سوراخ)</small></td>
			<td>CNC</td>
		</tr>
		<tr>
			<td>فرمت پانچ <small>(نحوه قرارگیری سوراخ ها)</small></td>
			<td>موازی یا متقاطع</td>
		</tr>
		<tr>
			<td>طول سینی <small>(شاخه)</small></td>
			<td>شاخه های {{persianumber("2")}} یا {{persianumber("3")}} متری</td>
		</tr>
		<tr>
			<td>لبه سینی</td>
			<td>برحسب سفارش {{persianumber("4")}} تا {{persianumber("...")}} <small>(سانتی متر)</small></td>
		</tr>
		<tr>
			<td>تعداد خم</td>
			<td>{{persianumber("4")}} یا {{persianumber("6")}}  خم</td>
		</tr>
		<tr>
			<td>جنس ورق</td>
			<td>گالوانیزه - فولادی - استیل</td>
		</tr>
		<tr>
			<td>روکش ورق</td>
			<td>فابریک - آبکاری گرم - رنگ کوره ایی</td>
		</tr>
	</table>
	<div class="alert alert-primary">
		مشخصات فنی سینی کابل وابسته به محیط و شرایط مورد نیاز می باشد. به طور مثال ضخامت سینی با توجه به وزن کابل های عبوری تعیین می شود و یا عرض سینی وابسته به تعداد کابل های عبوری و همچنین فضای مورد نیاز برای سازماندهی کابل ها است.
	</div>
	<div class="alert alert-success">
		در صورت نیاز به هر گونه مشاوره جهت انتخاب محصول می توانید با دفتر فروش گروه کبیر تماس بگیرید.
	</div>
</div>
<div style="height: 150px;"></div>
@endsection