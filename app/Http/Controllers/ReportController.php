<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Calendar;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\DocBlock\Tag;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();
        return view('panel.reports.show', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function upload()
     {
         return view('panel.reports.upload');
     }

    public function create()
    {
        return view('panel.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
      $project = [
        '1' => 'Proyecto1',
        '2' => 'Proyecto2',
      ];
      $cost = [
        '1' => 'Costo1',
        '2' => 'Costo2',
      ];
      $countries = Country::all();
      $allcountries = Country::pluck('pais');
      $coin_type = Country::pluck('coin_type');
      return view('panel.reports.edit',compact('countries', 'allcountries', 'coin_type', 'project', 'cost','report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $report->update($request->all());
        return redirect()->route('reports.index', compact('report'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('reports.index');
    }
}
