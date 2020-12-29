<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;
class ConsultationRecordDetails extends Model
{
    use softDeletes;
    protected $fillable = [
        'consultation_id'
    ];

    protected $hidden = [

    ];

}
