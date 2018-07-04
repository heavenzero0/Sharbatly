<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loading extends Model
{

    const APPROVED = 'approved';
    const DISAPPROVED = 'disapproved';
    const UNCHECK = 'uncheck';

    protected $fillable = [
        'productionWeek', 'carrier', 'ETD', 'ETA', 'voyage_no', 'POD','POL', 'status', 'year', 'vesselName'
    ];
}
