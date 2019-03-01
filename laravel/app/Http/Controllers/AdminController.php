<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Rap2hpoutre\FastExcel\FastExcel;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\LengthAwarePaginator;
use Yajra\Datatables\Datatables;
use App\admin;
use App\excel_data;
use Validator;
use App\Laporan;
use File;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:admin');
  }


  public function dashboard()
  {
      return view('admin.dashboard_stock');
  }

  public function error_upload()
  {
      return view('admin.error_upload');
  }

  public function get_dataStock(){
      $stock =  DB::table('excel_datas')->get();
     //  @foreach ($stock as $stock)
     //    dd($stock)
     // @endforeach
// number_format(1254631 , 0, ',', '.');

      return Datatables::of($stock)->make(true);
  }

  public function store_dataStock(Request $request)
  {
         $file= $request->file('file');
         $file_name = time().'_'.$file->getClientOriginalName();
         $path = $file->storeAs('data',$file_name);

     //farsing data
     $path_data = storage_path('app/data/'.$file_name);

     // farsing .xlxs
     $collection = (new FastExcel)->import($path_data);

    // csv parsing
    //$collection = (new FastExcel)->configureCsv(";")->import($path_data);

    //cek sesuai template/tidak
    $jumlah_row = count($collection[1]);

    if ($jumlah_row == 8)
    {

    //menghitung database
    $stock =DB::table('excel_datas')->count();

    // check data in database
    if ($stock != 0){
      DB::table('excel_datas')->truncate();
      foreach ($collection  as $csv) {

         $dbh=new excel_data;
         $dbh->material = $csv['Material'];
         $dbh->material_description =$csv['Material Description'];
         $dbh->unrestricted = str_replace('.',',',$csv['Unrestricted']);
         $dbh->currency = $csv['Currency'];
         $dbh->base_unit = $csv['Base Unit of Measure'];
         $dbh->value_unrestricted = $csv['Value Unrestricted'];
         $dbh->harga = round($csv['Harga']);
         $dbh->save();
        }
        File::delete($path_data);
        return redirect()->route('admin.dashboard');
    }else {
      foreach ($collection  as $csv) {
         $dbh=new excel_data;
         $dbh->material = $csv['Material'];
         $dbh->material_description =$csv['Material Description'];
         $dbh->unrestricted = str_replace('.',',',$csv['Unrestricted']);
         $dbh->currency = $csv['Currency'];
         $dbh->base_unit = $csv['Base Unit of Measure'];
         $dbh->value_unrestricted = $csv['Value Unrestricted'];
         $dbh->harga = round($csv['Harga']);
         $dbh->save();
        }
        File::delete($path_data);
        return redirect()->route('admin.dashboard');
    }

  }else {
    return redirect()->route('admin.error');
  }
  }



  public function pesanan_stock()
  {
    $laporan =  DB::table('laporans')
      ->join('users', 'users.id', '=', 'laporans.id_user')
      ->select('laporans.id','laporans.created_at','users.name','laporans.material', 'laporans.jumlah', 'laporans.komentar' ,'laporans.comment_status', 'laporans.status_data')
      ->orderBy('created_at', 'desc')
      ->get();
    return view ('admin.pesanan_stock',['laporan'=>$laporan]);
  }


  // public function get_pesanStock()
  // {
  // $laporan =  DB::table('laporans')
  //   ->join('users', 'users.id', '=', 'laporans.id_user')
  //   ->select('laporans.id','laporans.created_at','users.name','laporans.material', 'laporans.jumlah', 'laporans.komentar')
  //   ->get();
  // return Datatables::of($laporan)->make(true);
  // }

  public function status_data(Request $request)
  {
    $data = $request->status;
    DB::table('laporans')
                ->where('id', $data)
                ->update(['status_data' => 1]);
    echo "berhasil";
  }


  public function notif(Request $request)
  {

    if ($request->kosong == "no"){
      DB::table('laporans')
                  ->where('comment_status', 0)
                  ->update(['comment_status' => 1]);
    } else {
       $count = DB::table('laporans')
                       ->where('comment_status', '0')
                       ->count();
       $laporan = $count;

      echo json_encode($laporan);
    }




  }




}
