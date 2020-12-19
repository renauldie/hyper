<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Admin\Disease;

class ConsultationDetail extends Model
{
    use softDeletes;
    protected $fillable = [
        'cosultations_id', 'diseases_id'
    ];

    protected $hidden = [

    ];

    public function diseases()
    {
        return $this->belongsTo(Disease::class, 'diseases_id', 'id');
    }

    public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'cosultations_id', 'id');
    }

}
