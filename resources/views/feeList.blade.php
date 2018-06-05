@extends('master')


@section('head')
<meta name="description" content="در این صحفه شما می توانید لیست قیمت اقلام مهم مربتط با سینی کابل را به دست آورید">
@endsection

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
	<strong style="direction: rtl;">{{$lastUpdatedDate}}</strong>
	به روز رسانی شده است.</span></div>
	<div class="alert alert-primary" role="alert"><span style="font-size: 0.9rem;">برای بدست آوردن قیمت ها در هر زمان میتوانید از  
	<a href="https://telegram.me/traycablebot" class="alert-link">ربات تلگرامی<i class="fa fa-telegram" aria-hidden="true"></i></a>
	ما نیز استفاده فرمایید</span>
	</div>
	<!-- <div class="mb-1" style="color: #2ecc71;">سینی کابل</div> -->
	<nav class="nav nav-tabs mb-1" style="color: #2ecc71;">
		<a class="nav-item nav-link active">سینی کابل</a>
		<a class="nav-item nav-link">لوله فولادی</a>
		<a class="nav-item nav-link">لوله فلکسی</a>
	</nav>
	<table class="table table-hover table-sm table-bordered mt-3" >
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
	      <td><?php $fee=20*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
	    </tr>
	    <tr>
	      <td>{{persianumber("10")}} سانت</td>
	      <td>{{persianumber("1.25")}} میل</td>
	      <td><?php $fee=20*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("10")}} سانت</td>
	      <td>{{persianumber("1.5")}} میل</td>
	      <td><?php $fee=20*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr style="border-bottom: 2px solid green;">
	      <td>{{persianumber("10")}} سانت</td>
	      <td>{{persianumber("2")}} میل</td>
	      <td><?php $fee=20*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
	    </tr>
	    <tr>
	      <td>{{persianumber("20")}} سانت</td>
	      <td>{{persianumber("1")}} میل</td>
	      <td><?php $fee=30*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("20")}} سانت</td>
	      <td>{{persianumber("1.25")}} میل</td>
	      <td><?php $fee=30*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("20")}} سانت</td>
	      <td>{{persianumber("1.5")}} میل</td>
	      <td><?php $fee=30*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr style="border-bottom: 2px solid green;">
	      <td>{{persianumber("20")}} سانت</td>
	      <td>{{persianumber("2")}} میل</td>
	      <td><?php $fee=30*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("30")}} سانت</td>
	      <td>{{persianumber("1")}} میل</td>
	      <td><?php $fee=40*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("30")}} سانت</td>
	      <td>{{persianumber("1.25")}} میل</td>
	      <td><?php $fee=40*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("30")}} سانت</td>
	      <td>{{persianumber("1.5")}} میل</td>
	      <td><?php $fee=40*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr style="border-bottom: 2px solid green;">
	      <td>{{persianumber("30")}} سانت</td>
	      <td>{{persianumber("2")}} میل</td>
	      <td><?php $fee=40*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    	    <tr>
	      <td>{{persianumber("40")}} سانت</td>
	      <td>{{persianumber("1")}} میل</td>
	      <td><?php $fee=50*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("40")}} سانت</td>
	      <td>{{persianumber("1.25")}} میل</td>
	      <td><?php $fee=50*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("40")}} سانت</td>
	      <td>{{persianumber("1.5")}} میل</td>
	      <td><?php $fee=50*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr style="border-bottom: 2px solid green;">
	      <td>{{persianumber("40")}} سانت</td>
	      <td>{{persianumber("2")}} میل</td>
	      <td><?php $fee=50*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("50")}} سانت</td>
	      <td>{{persianumber("1")}} میل</td>
	      <td><?php $fee=60*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("50")}} سانت</td>
	      <td>{{persianumber("1.25")}} میل</td>
	      <td><?php $fee=60*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr>
	      <td>{{persianumber("50")}} سانت</td>
	      <td>{{persianumber("1.5")}} میل</td>
	      <td><?php $fee=60*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	    <tr style="border-bottom: 2px solid green;">
	      <td>{{persianumber("50")}} سانت</td>
	      <td>{{persianumber("2")}} میل</td>
	      <td><?php $fee=60*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small</td>
	    </tr>
	  </tbody>
	</table>
</div>
@endsection

