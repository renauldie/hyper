<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConsultationDetail extends Model
{
    use softDeletes;
    protected $fillable = [
        'cosultations_id', 'diseases_id'
    ];

    protected $hidden = [

    ];

    public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'cosultations_id', 'id');
    }

}
