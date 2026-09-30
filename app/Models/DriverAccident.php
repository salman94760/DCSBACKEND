<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverAccident extends Model
{
    public $fillable = [
        'driver_id',
        'date',
        'nature',
        'fatalities',
        'injuries',
        'remark',
    ];
}
