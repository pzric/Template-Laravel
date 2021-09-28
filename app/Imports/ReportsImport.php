<?php

namespace App\Imports;

use App\Models\Report;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ReportsImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Report([
        'date' => $row['fecha'],
        'coin' => $row['moneda'],
        'id_country' => $row['pais'],
        'currency' => $row['ml'],
        'number1' => $row['monto_ml'],
        'number2' => $row['monto_usd'],
        'id_countryb' => $row['pais_beneficiado'],
        'id_concept' => $row['concepto_especifico'],
        'concep' => $row['concepto_global'],
        'description' => $row['descripcion'],
        'cost' => $row['costo'],
        'calendar' => $row['calendario'],
        'project' => $row['proyecto'],
        'name_beneficted' => $row['beneficiado'],
        'user_area' => $row['area_beneficiado'],
      ]);
    }

    public function rules(): array
    {
      return [
        'fecha' => 'required',
        'moneda' => ['required','numeric'],
        'pais' => 'required',
        'ml' => 'required',
        'monto_ml' => ['required','numeric'],
        'monto_usd' => ['required','numeric'],
        'pais_beneficiado' => 'required',
        'concepto_especifico' => 'required',
        'concepto_global' => 'required',
        'descripcion' => ['required','max:255'],
        'costo' => 'required',
        'calendario' => 'required',
        'proyecto' => 'required',
        'beneficiado' => 'required',
        'area_beneficiado' => 'required',
      ];
    }
  }
