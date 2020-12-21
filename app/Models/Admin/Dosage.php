<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosage extends Model
{
    use softDeletes;
    
    protected $fillable = [
        'dosage_rule', 'dosage'
    ];

    protected $hidden = [

    ];
}
