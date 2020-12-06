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
}
