<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
  public function __construct()
  {
      $this->middleware('guest', ['except' => ['userlogout']]);
  }

  public function index()
  {
      return view('user.login');
  }

  public function login_auth(Request $request)
  {
    $credentials = $request->only('username', 'password');

    if (Auth::guard('web')->attempt($credentials)) {
       return redirect()->intended(route('user.menu'));
     }else {
      return redirect()->back()->withInput($request->only('username', 'password'));
     }
  }

  public function userlogout()
  {
    Auth::logout();
    return redirect()->route('user.login');
  }


  public function register()
  {
      return view('user.register');
  }

  public function register_store(Request $request)
  {
    $user = new User;
    $user->name = $request->nama;
    $user->username = $request->username;
    $user->password =Hash::make($request->repeat);
    $user->save();
    Auth::loginUsingId($user->id);
  }




}
