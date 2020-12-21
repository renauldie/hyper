<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Age extends Model
{
    use softDeletes;
    
    protected $fillable = [
        'start_age', 'end_age'
    ];

    protected $hidden = [

    ];
}
