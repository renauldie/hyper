<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineRuleDetail extends Model
{
    // use HasFactory;

    protected $fillable = [
        'medicine_rule_id', 'disease_id', 'medicine_id'
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

    public function medicine_list()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id', 'id');
    }
}
