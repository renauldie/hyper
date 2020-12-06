<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disease extends Model
{
    use softDeletes;
    protected $fillable = [
        'name', 'alias', 'description', 'slug'
    ];

    protected $hidden = [

    ];

}
