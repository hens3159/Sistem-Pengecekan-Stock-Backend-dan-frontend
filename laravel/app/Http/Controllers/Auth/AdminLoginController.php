<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\admin;
use Illuminate\Support\Facades\Hash;



class AdminLoginController extends Controller
{

  public function __construct()
  {
      $this->middleware('guest:admin', ['except' => ['logout']]);
  }

  public function login()
  {
      return view('admin.login');
  }

  public function login_auth(Request $request)
  {
    $credentials = $request->only('username', 'password');
    if (Auth::guard('admin')->attempt($credentials)) {
       return redirect()->intended(route('admin.dashboard'));
     }else {
      return redirect()->back()->withInput($request->only('username', 'password'));
     }
  }

  public function logout()
  {
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login');
  }

  public function register()
  {
      return view('admin.register_admin');
  }

  public function register_store(Request $request)
  {
    $admin = new admin;
    $admin->name = $request->nama;
    $admin->username = $request->username;
    $admin->password =Hash::make($request->repeat);
    $admin->save();

    Auth::guard('admin')->loginUsingId($admin->id);

    return redirect()->route('admin.dashboard');
  }


}
