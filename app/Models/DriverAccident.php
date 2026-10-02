<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverAccident extends Model
{
    protected $table = 'driver_accidents';
    public $fillable = [
        'driver_id',
        'date',
        'nature',
        'fatalities',
        'injuries',
        'remark',
    ];
}
