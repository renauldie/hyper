<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DosageDetail extends Model
{
    use softDeletes;
    
    protected $fillable = [
        'dosages_id', 'ages_id', 'weights_id', 'blood_pressure_id'
    ];

    protected $hidden = [

    ];

    public function dosage()
    {
        return $this->belongsTo( Dosage::class, 'dosages_id', 'id');
    }

    public function age()
    {
        return $this->belongsTo(Age::class, 'ages_id', 'id');
    }

    public function weight()
    {
        return $this->belongsTo(Weight::class, 'weights_id', 'id');
    }

    public function b_pressure()
    {
        return $this->belongsTo( BloodPressure::class, 'blood_pressure_id', 'id');
    }
}
