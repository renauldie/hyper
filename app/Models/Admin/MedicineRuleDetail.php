<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicineRuleDetail extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'medicine_rule_id', 'disease_id'
    ];

    protected $hidden = [
        //
    ];

    public function medicine_rule()
    {
        return $this->belongsTo(MedicineRule::class, 'medicine_rule_id', 'id');
    }

    public function disease_rule()
    {
        return $this->belongsTo(Disease::class, 'disease_id', 'id');
    }
}
