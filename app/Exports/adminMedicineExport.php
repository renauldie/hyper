<?php

namespace App\Exports;

use App\Models\Admin\Medicine;
use Maatwebsite\Excel\Concerns\FromCollection;

class adminMedicineExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Medicine::all();
    }
}
