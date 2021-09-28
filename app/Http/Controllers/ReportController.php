<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Calendar;
use App\Models\Country;
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

        $request->validate([
          'date' => 'required',
          'coin' => 'required',
          'id_country' => 'required',
          'currency' => 'required',
          'number1' => 'required',
          'number2' => 'required',
          'id_countryb' => 'required',
          'description' => 'required',
          'calendar' => 'required|same:valtotal',
          'cost' => 'required',
          'project' => 'required',
          'name_beneficted' => 'required',
          'user_area' => 'required',
        ]);
        $calendar = Calendar::create([
          'total' => $request['valtotal'],
          'mounth1' => $request['val1'],
          'mounth2' => $request['val2'],
          'mounth3' => $request['val3'],
          'mounth4' => $request['val4'],
          'mounth5' => $request['val5'],
          'mounth6' => $request['val6'],
          'mounth7' => $request['val7'],
          'mounth8' => $request['val8'],
          'mounth9' => $request['val9'],
          'mounth10' => $request['val10'],
          'mounth11' => $request['val11'],
          'mounth12' => $request['val12'],
        ]);
        $calendar->save();
        $report = Report::create([
          'date' => $request['date'],
          'coin' => $request['coin'],
          'id_country' => $request['id_country'],
          'currency' => $request['currency'],
          'number1' => $request['number1'],
          'number2' => $request['number2'],
          'id_countryb' => $request['id_countryb'],
          'id_concept' => $request['id_concept'],
          'concep' => $request['concep'],
          'description' => $request['description'],
          'cost' => $request['cost'],
          'calendar' => $request['calendar'],
          'project' => $request['project'],
          'name_beneficted' => $request['name_beneficted'],
          'user_area' => $request['user_area'],
          'calendar_id' => $calendar->id,
        ]);
        if ($request->users) {
          $report->users()->attach($request->users);
        }
        return redirect()->route('reports.index');
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
