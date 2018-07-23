

@extends('master')


@section('head')
<meta name="description" content="هرمز گروپ تولید کننده انواع سینی کابل و نردبان کابل و تمامی متعلقات آن می باشد. این گروه محصولات خود را با استفاده از دستگاه cnc ترومپ 600 تولید می کند">
<style>
	.carousel-item{
		height: 300px;
	}
	img{
		max-width: 100%;
		height: auto;
	}
	@media (min-width: 576px) { 
		.carousel-item{
			height: 400px;
		}
		img{
			max-width: 100%;
		}
	}
</style>
@endsection



@section('container-fluid-carousel')

	@include('carousel')
@endsection

@section('content')
	<div class="container text-center my-5 bg-danger" style="color:white; border-radius:1em;">
		گروه هرمز مفتخر است اعلام بدارد که با تهیه دستگاه Trumpf 600، توانایی انجام کلیه خدمات<strong class="lead text-warning"> لیزر</strong>،<strong class="lead text-warning"> پانچ</strong> و<strong class="lead text-warning"> برش </strong>cnc را دارا می باشد
	</div>
	<div class="jumbotron mb-0" style="border-radius: 0px;">
		<div class="row align-items-center p-0">
			<div class="col-3 text-center" >
				گروه فنی مهندسی کبیر
			</div>
			<div class="col-9" style="border-right:3px solid #3498db;">
				گروه فنی مهندسی سینی کابل کبیر از سال {{persianumber("87")}} فعالیت خود را در بخش تولید انواع سینی های کابل، لوله های گالوانیزه، لوله های فلکسی آغاز کرده است. هر ساله توانسته ایم به یاری حق کیفیت اجناس خود را بالا برده و برای جلب رضایت مشتریان گرامی تلاش نموده ایم. گروه صنعتی کبیر توانسته از سال {{persianumber("87")}} تا به امروز تمامی نیازهای مشتریان خود را بر آورده کند و همچنین در بازار رقابت باقی بماند.
			</div>
		</div>
	</div>
	<div class="my-5"></div>
	<div class="px-5 my-5">
		<div class="display-4" style="font-size: 2.5rem;">	خدمات ما</div>
		<div class="row mt-4">
			<div class="card col-sm-6 col-md-3" style="background-color: #e9ecef;border: none;">
				<img class="card-img-top pt-4" src="images/traycable.jpg" style="height: 200px;border-radius: 3rem; ">
				<div class="card-body">
					<h4 class="card-title">سینی کابل</h4>
					<p class="card-text">از سینی کابل برای عبور کابل ها در فضاهای باز و محیط های بیرونی استفاده می شود</p>
					<a href="سینی-کابل" class="btn btn-primary">مشخصات فنی</a>
				</div>
			</div>
			<div class="card col-sm-6 col-md-3" style="background-color: #e9ecef;border: none;">
				<img class="card-img-top pt-4" src="images/ladder.jpg" style="height: 200px;border-radius: 3rem;">
 				<div class="card-body">
					<h4 class="card-title">نردبان کابل</h4>
					<p class="card-text">معمولا در فضای های بسته و محیط های داخلی از نردبان کابل استفاده می شود</p>
					<a href="نردبان-کابل" class="btn btn-primary">مشخصات فنی</a>
				</div>
			</div>
			<div class="card col-sm-6 col-md-3" style="background-color: #e9ecef;border: none;">
				<img class="card-img-top pt-4" src="images/pipe.jpg" style="height: 200px;border-radius: 3rem;">
		 		<div class="card-body">
					<h4 class="card-title">لوله فولادی</h4>
					<p class="card-text">از لوله های فولادی برای انتقال کابل های فوق العاده حساس استفاده می شود</p>
					<a href="نردبان-کابل" class="btn btn-primary">مشخصات فنی</a>
				</div>
			</div>
			<div class="card col-sm-6 col-md-3" style="background-color: #e9ecef;border: none;">
				<img class="card-img-top pt-4" src="images/pipe-flexi.jpg" style="height: 200px;border-radius: 3rem;">
				<div class="card-body">
					<h4 class="card-title">لوله فلکسی</h4>
					<p>لوله فلکسی ها به دلیل انعطاف پذیری برای توزیع کابل ها مناسب است</p>
					<a href="نردبان-کابل" class="btn btn-primary">مشخصات فنی</a>
				</div>
			</div>
		</div>
	</div>
@endsection
