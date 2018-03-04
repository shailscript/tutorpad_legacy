<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{
    public function __construct(){
      $this->middleware('guest:admin');
    }

    //show login from for admin
    public function showLoginForm() {
      return view('auth.admin-login');
    }

    public function login(Request $request) {
      //validate Request
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);
      //attempt login
      if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password' => $request->password], $request->remember)) {
        return redirect()->intended('/admin/dashboard');
      }
      //sucessful, redirect to dashboard (AdminController@index)
      //unsuccessful, redirect to showLoginForm
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
