<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\laporan;
use App\excel_data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;




class UserController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }


  public function menu_user()
  {
      return view('user.menu');
  }

  public function cek_stock()
  {
    $excel = excel_data::paginate(5);
    $count = $excel->count();

    if($count != 0){
      return view ('user.cek_stock',['excel_data'=>$excel]);

}else {
      return view('user.tidak_ada_pencarian_stock');
}


  }



  public function pencarian_stock(Request $request)
  {
    $cari_data = $request->cari;
    $barang = excel_data::where('material_description','LIKE','%'.$cari_data.'%')->get();
    if($barang->count() != 0){
    return view ('user.pencarian_stock',['barang'=>$barang, 'cari_data' => $cari_data]);
    }else{
    return view ('user.pencarian_stock_kosong', ['cari_data' => $cari_data]);
    }

  }


  public function minta_stock()
  {
      return view('user.minta_stock');
  }

  public function store_mintaStock(Request $request)
  {
        $laporan = new laporan;
        $laporan->material = $request->nama;
        $laporan->komentar = $request->komen;
        $laporan->jumlah = $request->jumlah;
        $laporan->id_user = Auth::id();
        $laporan->save();

  }


}
