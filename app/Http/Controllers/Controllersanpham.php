<?php
namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;

use App\sanpham;



class Controllersanpham extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //Dung de hien thi du lieu tren trang danh sach san pham
     // SanPham = sanpham::all();
     //    return $SanPham;

    
$ten = $_GET['ten'];
        $gl = $_GET['gianlon'];
        $gn = $_GET['gianho'];
        $SanPham = DB::table('sanpham') -> where('ten','like','%%'.$ten.'%%')
                                    -> whereBetween('gia', [$gn,$gl])
                                    ->get();
        return $SanPham;

        }
    
    

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //Goi trang them san pham
        //
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Them du lieu vao co so du lieu
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Hien thi chi tiet san pham dua vao id




        $SanPham = sanpham::find($id);
        return  json_encode($SanPham);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Goi ra form chinh sua cung voi du lieu

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // chinh sua du lieu dua vao id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // xoa bo san pham dua tren id
    }
}
