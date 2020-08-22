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

    public function validateNCreated($data)
    {
        $prdCreated = [];
        $error = [];

        foreach ($this->fillable as $field) {

            if (!array_key_exists($field, $data) and ($field != 'prd_image')) {
                array_push($error, "Field {$field} not found");
            }
        }
        if (empty($error)) {

            $product = Products::updateOrCreate(['prd_name' =>$data['prd_name']], $data);
            $response = 200;

            $prdCreated = $product;
        }
        else {
            $response = 403;
            $prdCreated = $error;
        }

        return [$response, $prdCreated];
    }
}
