<?php

namespace App\Http\Controllers;

use App\Imports\ReportsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function upload(){
      return view('panel.reports.upload');
    }

    public function import(Request $request){
      Excel::import(new ReportsImport, request()->file('excel'));
      return redirect()->route('reports.index');
    }
}
