<?php

use App\Fee;
use App\Post;
use \Morilog\Jalali\jDate;
use \Morilog\Jalali\jDateTime;
use Carbon\Carbon;
use Spatie\Sitemap\SitemapGenerator;
use Hekmatinasser\Verta\Verta;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('index');
});

// Route::get('{section}/{a}',function($section){
// 	return $section;
// });



Route::post('fee/bot.php','FeeController@control');

Route::get('sitemap',function(){
	SitemapGenerator::create('https://hormozgroup.ir')->writeToFile('/var/www/hormozgroup.ir/public/sitemap.xml');
});






Route::get('لیست-قیمت',function(){
	$feeSheet=Fee::firstOrCreate(['id'=>1]);
	$value=$feeSheet->value;
	$lastUpdated=$feeSheet->updated_at;
	$lastUpdated = new Carbon($lastUpdated);
	$lastUpdatedDate=$lastUpdated->toDateString();
	$lastUpdatedDate = jDateTime::strftime('Y/m/d', $lastUpdatedDate);
	$lastUpdatedDate = jDateTime::convertNumbers($lastUpdatedDate);
	return view('feeList',compact('lastUpdatedDate','value'));
});
Route::get('تماس-با-ما',function(){
	return view('contactus');
});
Route::get('درباره-ما',function(){
	return view('aboutUs');
});
Route::get('سینی-کابل',function(){
	return view('traycable');
});
Route::get('نردبان-کابل',function(){
	return view('laddercable');
});
Route::get('وبلاگ',function()
{
	// $v = new Verta();
	// return $v->format('%B %d، %Y');

	if (Auth::check() && Auth::user()->role=='admin')
		$posts=Post::where('type','blog')->latest()->get();
	else
		$posts=Post::where('type','blog')->where('status','publish')->latest()->get();      
	foreach ($posts as $post) 
	{
		// return $post->created_at->format('Y-m-d');
		$v=new Verta($post->created_at);
		$post->created_at2 = $v->format('%d %B %Y');
	}
	
	return view('posts.index',compact('posts'));
});
Route::get('setfee/{fee}',function($fee){
	$feeSheet=Fee::firstOrCreate(['id'=>1]);
	$feeSheet->value=$fee;
	$feeSheet->save();
});


Route::auth();

Route::resource('posts', 'PostController');