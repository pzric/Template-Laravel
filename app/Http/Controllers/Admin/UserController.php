<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('panel.users.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $rol = [
        'Super usuario' => 'Super usuario',
        'Administrador' => 'Administrador',
        'Usuario operativo' => 'Usuario operativo',
        'Usuario aprovador' => 'Usuario aprovador',
      ];
      $area = [
        'Comercial' => 'Comercial',
        'Finanzas' => 'Finanzas',
        'Logistica' => 'Logistica',
        'Capital humano' => 'Capital humano',
        'Marketing' => 'Marketing',
        'TI' => 'TI',
      ];
      $countries = Country::all();
      $allcountries = Country::pluck('pais');
      $coin_type = Country::pluck('coin_type');
      return view('panel.users.create',compact('rol', 'area', 'countries', 'allcountries', 'coin_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
      /*$request->validate([
        'name' => 'required',
        'password' => 'required',
        'password_confirm' => 'required|same:password',
        'email' => 'required',
        'rol' => 'required',
        'country_origin' =>'required',
        'area' =>'required',
        'money' =>'required',
        'start_date' =>'required',
        'end_date' =>'required',
        'toggle' =>'required',
        'cod_manager' =>'required',
        'email_manager' =>'required',
      ]);
      $user->update([
        'name' => $request['name'],
        'password' => bcrypt($request['password_confirm']),
        'email' => $request['email'],
        'rol' => $request['rol'],
        'country_origin' => $request['country_origin'],
        'area' => $request['area'],
        'money' => $request['money'],
        'start_date' => $request['start_date'],
        'end_date' => $request['end_date'],
        'toggle' => $request['toggle'],
        'cod_manager' => $request['cod_manager'],
        'email_manager' => $request['email_manager'],
      ]);
      return redirect()->route('users.index');*/
      return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      $rol = [
        'Super usuario' => 'Super usuario',
        'Administrador' => 'Administrador',
        'Usuario operativo' => 'Usuario operativo',
        'Usuario aprovador' => 'Usuario aprovador',
      ];
      $area = [
        'Comercial' => 'Comercial',
        'Finanzas' => 'Finanzas',
        'Logistica' => 'Logistica',
        'Capital humano' => 'Capital humano',
        'Marketing' => 'Marketing',
        'TI' => 'TI',
      ];
      $countries = Country::all();
      $allcountries = Country::pluck('pais');
      $coin_type = Country::pluck('coin_type');
      return view('panel.users.edit',compact('rol', 'area', 'user','countries', 'allcountries', 'coin_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $request->validate([
        'name' => 'required',
        'password' => 'required',
        'password_confirm' => 'required|same:password',
        'email' => 'required',
        'rol' => 'required',
        'country_origin' =>'required',
        'area' =>'required',
        'money' =>'required',
        'start_date' =>'required',
        'end_date' =>'required',
        'toggle' =>'required',
        'cod_manager' =>'required',
        'email_manager' =>'required',
      ]);
      $user->update([
        'name' => $request['name'],
        'password' => bcrypt($request['password_confirm']),
        'email' => $request['email'],
        'rol' => $request['rol'],
        'country_origin' => $request['country_origin'],
        'area' => $request['area'],
        'money' => $request['money'],
        'start_date' => $request['start_date'],
        'end_date' => $request['end_date'],
        'toggle' => $request['toggle'],
        'cod_manager' => $request['cod_manager'],
        'email_manager' => $request['email_manager'],
      ]);
      return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $user->delete();
      return redirect()->route('users.index');
    }
}
