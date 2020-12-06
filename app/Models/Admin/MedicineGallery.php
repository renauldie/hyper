<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicineGallery extends Model
{
    use softDeletes;

    protected $fillable = [
        'medicines_id', 'image'
    ];

    protected $hidden = [

    ];

    public function medicine(){
        return $this->belongsTo(Medicine::class, 'medicines_id', 'id');
    }
}
