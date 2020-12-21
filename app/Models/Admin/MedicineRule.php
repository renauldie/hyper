<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineRule extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name', 'description', 'medicine_id'
    ];

    protected $hidden = [
        //
    ];

    public function medicine_rule_detail()
    {
        return $this->hasMany(MedicineRuleDetail::class, 'medicine_rule_id', 'id');
    }

    public function medicine()
    {
        return $this->belongsTo( Medicine::class, 'medicine_id', 'id');
    }
}
