<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanDetails extends Model
{
    protected $fillable = [
        'van_id','product_id', 'quantity',
    ];
}
