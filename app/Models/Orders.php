<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'ord_value',
        'ord_prod_id',
        'ord_clt_id'
    ];
}
