	@extends('master')


@section('head')
<meta name="description" content="تماس با ما - 02133960092و09127194347 هرمز گروپ تولید کننده انواع سینی کابل و نردبان کابل در کشور">
<link rel="stylesheet" href="css/font-awesome.min.css">
<style>
	p{
		font-size: 0.9rem;
		margin-bottom: 0 !important;
	}
</style>
@endsection


@section('container')
<div class="row my-5 alert alert-info">
	<div class="col-12 col-sm-3 text-center">
		<img class="img-fluid rounded-circle my-2 my-sm-0" src="images/sales.jpg" alt="" style="max-height: 120px;">
	</div>
	<div class="col-12 col-sm-9 align-self-center">
		<p style="font-size: 0.9rem;">سلام. لاله قادری هستم مدیر فروش گروه صنعتی هرمز. در صورت نیاز به هرگونه مشاوره در مورد محصولات لطفا با من تماس بگیرید.</p>
		<div class="text-center" dir="ltr">
			<p><i class="fa fa-mobile fa-2x" aria-hidden="true" style="padding-right:5px;"></i>{{persianumber("09358811546")}} :همراه</p>
			<p><i class="fa fa-telegram fa-2x"></i>تلگرام: <a style="color:#0c5460;" href="https://telegram.me/Ghaedi_kabirsini">@Ghaedi_kabirsini</a> </p>
		</div>
	</div>
</div>

<div class="row mb-5" style="margin-top: 15px;">
	<div class="col-md-6">
		<span style="color: #2ecc71;">دفتر فروش:</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-map-marker" aria-hidden="true"></i> آدرس: تهران، خ سعدی جنوبی، مجتمع تجاری سعدی، طبقه دوم، واحد {{persianumber("207")}}</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> تلفن: ۳۳۹۶۰۰۹۲ - ۳۳۹۵۰۷۷۰ - ۳۳۹۸۶۷۰۲</span>
		<br>
		{{--  <span style="font-size: 0.9rem;"><i class="fa fa-mobile" aria-hidden="true" style="padding-right:5px;"></i>  همراه: {{persianumber("09123102458")}}</span>  --}}
		{{--  <br>  --}}
		<br>
		<div class="text-center">
			<iframe class="lazy" data-src="https://www.m-gh.info/daftarMap" frameborder="0" style='height:300px;width:320px;margin-left:auto; margin-right:auto;'scrolling="no"></iframe>
		</div>
	</div>
	<div class="col-md-6 mt-3 mt-md-0">
		<span style="color: #2ecc71;">کارگاه تولیدی:</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-map-marker" aria-hidden="true"></i> آدرس: تهران، بزرگراه آزادگان، آهن مکان، فاز پنجم شرقی، پلاک {{persianumber("1181")}}</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> تلفن: {{persianumber("55440335")}}</span>
		<br>
		{{--  <span style="font-size: 0.9rem;"><i class="fa fa-mobile" aria-hidden="true" style="padding-right:5px;"></i> همراه: {{persianumber("09181626210")}} - {{persianumber("09127194347")}}</span>  --}}
		{{--  <br>  --}}
		<br>
		<div class="text-center">
			<iframe class="lazy" data-src="https://www.m-gh.info/kargahMap" frameborder="0" style='height:300px;width:320px;margin-left:auto; margin-right:auto;'scrolling="no"></iframe>
		</div>
	</div>
</div>
@endsection