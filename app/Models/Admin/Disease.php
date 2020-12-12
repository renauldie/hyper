<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\ConsultationDetail;

class Disease extends Model
{
    use softDeletes;
    protected $fillable = [
        'name', 'alias', 'description', 'slug'
    ];

    protected $hidden = [

    ];

    public function consultation_detail()
    {
        return $this->hasMany(ConsultationDetail::class, 'diseases_id', 'id');
    }
}
