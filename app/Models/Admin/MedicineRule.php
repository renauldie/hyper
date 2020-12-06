<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineRule extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name', 'description'
    ];

    protected $hidden = [
        //
    ];

    public function medicine_rule_detail()
    {
        return $this->hasMany(MedicineRuleDetail::class, 'medicine_rule_id', 'id');
    }
}
