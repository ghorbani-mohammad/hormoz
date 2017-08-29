@extends('master')

@section('container')

<div class="row" style="margin-top: 15px;">
	<div class="col-6">
		<span style="color: #2ecc71;">دفتر فروش:</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-map-marker" aria-hidden="true"></i> آدرس: تهران، خیابان سعدی جنوبی، مجتمع تجاری سعدی، طبقه دوم، واحد 207</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> تلفن: ۳۳۹۶۰۰۹۲ - ۳۳۹۵۰۷۷۰ - ۳۳۹۸۶۷۰۲</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-mobile" aria-hidden="true" style="padding-right:5px;"></i>  همراه: 09123102458</span>
		<br>
		<br>
			<div id='gmap_canvas' class="text-center" style='height:300px;width:400px;margin-left:auto; margin-right:auto;'></div>
	</div>
	<div class="col-6">
		<span style="color: #2ecc71;">کارگاه تولیدی:</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-map-marker" aria-hidden="true"></i> آدرس: تهران، بزرگراه آزادگان، آهن مکان، فاز پنجم شرقی، پلاک 1189</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> تلفن: 55440335</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-mobile" aria-hidden="true" style="padding-right:5px;"></i> همراه: 09181626210 - 09127194347</span>
		<br>
		<br>
		<div class="text-center">
			<div id='gmap_canvas2' class="text-center" style='height:300px;width:400px;margin-left:auto; margin-right:auto;'></div>
		</div>
	</div>
</div>

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>

<script type='text/javascript'>
function init_map()
{
	var myOptions = {zoom:16,center:new google.maps.LatLng(35.689720,51.424454),mapTypeId: google.maps.MapTypeId.ROADMAP};
	map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(35.689600,51.424422)});
	infowindow = new google.maps.InfoWindow({content:'<br><strong>Kabir Trade Department</strong>'});
	google.maps.event.addListener(marker, 'click', function()
	{
		infowindow.open(map,marker);
	});
	infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', init_map);

function init_map2()
{
	var myOptions = {zoom:16,center:new google.maps.LatLng(35.611094, 51.400786),mapTypeId: google.maps.MapTypeId.ROADMAP};
	map = new google.maps.Map(document.getElementById('gmap_canvas2'), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(35.611094, 51.400786)});
	infowindow = new google.maps.InfoWindow({content:'<br><strong>Kabir Production Department</strong>'});
	google.maps.event.addListener(marker, 'click', function()
	{
		infowindow.open(map,marker);
	});
	infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', init_map2);

</script>

@endsection