<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Quotation;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function GoiTrangChu()
    {
		$SanPham = DB::table('sanpham')->select('id','ten','gia','mota')->get();
    	// $tmp = json_decode($SanPham);
    	return view('ebusiness.api.v0.index')->with(['sanpham'=>$SanPham]);
    	// return view('ebusiness.api.v0.index',compact('sanpham'));
    	// echo $SanPham;
    	// printf($SanPham);
    }     

    public function GoiTrangTimKiem()
    {

    	return view('ebusiness.api.v0.timkiem');
    }

}



