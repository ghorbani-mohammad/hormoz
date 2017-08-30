<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function(){
    return view('index');
});
Route::get('لیست-قیمت-سینی-کابل',function(){
	return view('feeList');
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
