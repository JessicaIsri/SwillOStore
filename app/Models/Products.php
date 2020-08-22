<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'prd_name',
        'prd_value',
        'prd_image'
    ];
}
