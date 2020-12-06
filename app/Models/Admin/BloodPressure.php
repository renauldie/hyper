<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodPressure extends Model
{
    use softDeletes;
    protected $fillable = [
        'sistolic_start', 'sistolic_end', 'diastolic_start', 'diastolic_end', 'classification', 'description'
    ];

    protected $hidden = [

    ];
}
