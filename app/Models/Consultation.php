<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;
class Consultation extends Model
{
    use softDeletes;
    protected $fillable = [
        'user_id', 'blood_pressure', 'body_weight', 'ages'
    ];

    protected $hidden = [

    ];

    public function consultation_detail()
    {
        return $this->hasMany(ConsultationDetail::class, 'cosultations_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
