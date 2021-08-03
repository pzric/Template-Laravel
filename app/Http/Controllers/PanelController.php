<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
  public function dashboard(){
    return view('panel.dashboard');
  }

  public function management(){
    return view('panel.management');
  }

  public function register(){
    return view('panel.register');
  }

  public function reports(){
    return view('panel.reports');
  }

  public function modifications(){
    return view('panel.modifications'); 
  }
}
