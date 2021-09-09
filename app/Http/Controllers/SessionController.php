<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SessionController extends Controller
{
  public function login(Request $request){
    $remember = $request->filled('remember');
    /** login */
    if (Auth::attempt($request->only('email', 'password'), $remember)){
      $request->session();
      return redirect()->route('panel');
    }
    return view('login');
  }
  public function logout(Request $request, Redirector $redirect){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return $redirect->to('/');
  }
}
