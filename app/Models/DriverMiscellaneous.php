<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverMiscellaneous extends Model
{
    protected $table = 'driver_miscellaneous';
    public $fillable = [
        'driver_id',
        'title',
        'date',
        'file',
    ];
}
