<?php

namespace App\Http\Controllers;

use App\Models\Benefited;
use Illuminate\Http\Request;
use App\Models\Country;

class BenefitedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.benefited.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $area = [
        'Comercial' => 'Comercial',
        'Finanzas' => 'Finanzas',
        'Logistica' => 'Logistica',
        'Capital humano' => 'Capital humano',
        'Marketing' => 'Marketing',
        'TI' => 'TI',
      ];
      $namecountries = Country::pluck('pais', 'id');
      return view('panel.benefited.create',compact('area', 'namecountries'));
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
        'name'=> 'required',
        'area'=> 'required',
        'country_origin'=> 'required',
      ]);
      Benefited::create($request->all());
      return redirect()->route('benefited.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefited $benefited)
    {
      $area = [
        'Comercial' => 'Comercial',
        'Finanzas' => 'Finanzas',
        'Logistica' => 'Logistica',
        'Capital humano' => 'Capital humano',
        'Marketing' => 'Marketing',
        'TI' => 'TI',
      ];
      $namecountries = Country::pluck('pais', 'id');
        return view('panel.benefited.edit',compact('benefited', 'area', 'namecountries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Benefited $benefited)
    {
      $benefited->update($request->all());
      return redirect()->route('benefited.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefited $benefited)
    {
      $benefited -> delete();
      return redirect()->route('benefited.index');
    }
}
