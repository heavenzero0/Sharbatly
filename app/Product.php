<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    const PRODUCT_NAME = array('4ha', '5ha', '6ha', '7ha', '8ha', '7kga', '5kga', '3kga', 'clb', '4hb', '5hb', '7hb', '8hb', '9hb');
    const CLASS_A = 'A';
    const CLASS_B = 'B';

    protected $fillable = [
        'name', 'unit_id', 'class',
    ];



}
