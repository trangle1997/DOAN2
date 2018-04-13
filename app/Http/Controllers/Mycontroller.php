<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    // kiem tra phuong thuc 
        public function GetURL(Request $request)
    {

	//return $request->path();
	if($request->isMethod('get'))
		echo "phuong thuc get";
	else
		echo "ko phai get";
	
	}
}


