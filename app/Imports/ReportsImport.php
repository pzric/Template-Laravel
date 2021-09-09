<?php

namespace App\Imports;

use App\Models\Report;
use Maatwebsite\Excel\Concerns\ToModel;

class ReportsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Report([
          'date'=> $row[0],
          'payment_country'=> $row[1],
          'currency'=> $row[2],
          'amount'=> $row[3],
          'dollar_amount'=> $row[4],
          'accrual'=> $row[5],
          'project'=> $row[6],
          'cost'=> $row[7],
          'description'=> $row[8],
          'state'=> $row[9],
          'username'=> $row[10],
          'user_area'=> $row[11],
        ]);
    }
}
