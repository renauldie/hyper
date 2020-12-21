<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
    use softDeletes;
    
    protected $fillable = [
        'medicine_name', 'description', 'max_usage',
        'find_at_pharmacy'
    ];

    protected $hidden = [

    ];

    public function medicine_galleries(){
        return $this->hasMany(MedicineGallery::class, 'medicines_id', 'id');
    }

    public function medicine_rule_detail()
    {
        return $this->hasMany( MedicineRuleDetail::class , 'medicine_id', 'id');
    }
}
