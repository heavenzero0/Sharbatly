<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitPricing extends Model
{
    protected $fillable = [
        'unit_id', 'price', 'invoice_id'
    ];
}
