<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Weight extends Model
{
    use softDeletes;
    
    protected $fillable = [
        'start_weight', 'end_weight'
    ];

    protected $hidden = [

    ];
}
