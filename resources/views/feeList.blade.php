@extends('master')

@section('container')
<style type="text/css">
	th{
		text-align: right;
	}
	table{
		font-size: .9rem;
	}
</style>
<div style="margin-top: 5px;">
	<div class="alert alert-success" role="alert"><span style="font-size: 0.9rem;">قیمتها در تاریخ 
	<strong>{{persianumber("1396/06/07")}}</strong>
	به روز رسانی شده است.</span></div>
	<div class="alert alert-primary" role="alert"><span style="font-size: 0.9rem;">برای بدست آوردن قیمت ها در هر زمان میتوانید از  
	<a href="https://telegram.me/traycablebot" class="alert-link">ربات تلگرامی<i class="fa fa-telegram" aria-hidden="true"></i></a>
	ما نیز استفاده فرمایید</span></div>
	<span style="color: #2ecc71;">سینی کابل</span>
	<table class="table table-hover table-sm table-bordered" >
	  <thead class="text-right">
	    <tr>
	      <th>عرض <small>(سانتی متر)</small></th>
	      <th>ضخامت <small>(میلیمتر)</small></th>
	      <th>قیمت <small>(شاخه دو متری)</small></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>{{persianumber("10")}} سانت</td>
	      <td>{{persianumber("1")}} میل</td>
	      <td>{{persianumber("10,000")}}</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("10")}} سانت</td>
	      <td>{{persianumber("1.25")}} میل</td>
	      <td>{{persianumber("11,000")}}</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("10")}} سانت</td>
	      <td>{{persianumber("1.5")}} میل</td>
	      <td>{{persianumber("12,000")}}</td>
	    </tr>
	  </tbody>
	</table>

	<span style="color: #2ecc71;">لوله فولادی</span>
	<hr>
</div>
@endsection

