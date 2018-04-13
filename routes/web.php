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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hoclaravel', function () {
   return "HEO CON";
});

Route::get('khoa-hoc', function () {
	



    return ('trang dễ thương');
});

Route::get('thucpham/{tenrau}/{ngaytuoi}',function ($tenrau,$ngaytuoi) {
	return "Đây là: $tenrau có ngày tuổi $ngaytuoi";

});

Route::get('HIHI/{tenmonan?}', function ($tenmonan = "Gà rán" ) {
	return "$tenmonan";
});

Route::get('call-view',function () {
	$hoten = "Lê Nguyễn Thuỳ Trang";
	return view('view', compact('hoten'));
});


Route::resource('sanpham','Controllersanpham');
	Route::group(['prefix'=>'ebusiness'],function(){
		Route::group(['prefix'=>'api'],function(){
			Route::group(['prefix'=>'v0'],function(){
				Route::get('trang-chu','TestController@GoiTrangChu');
				Route::get('tim-kiem','TestController@GoiTrangTimKiem');
				
			});
		});
	});

	//URL
	Route::get('MyRequest','Mycontroller@GetURL');




