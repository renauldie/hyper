<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\User;
use App\Models\Consultation;

use Illuminate\Support\Facades\DB;


class adminUserConsultationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $items = Consultation::with([
            'user'
        ])->get();

        $data = DB::table('consultations')
            ->select('users.name', 'consultations.blood_pressure', 'consultations.body_weight', 'consultations.ages')
            ->join('users', 'users.id', 'consultations.user_id')
            ->get();
                
        // return User::all();
        return $data;
    }
}
