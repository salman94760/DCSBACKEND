<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverDrugTest extends Model
{
    protected $table = 'driver_drugtests';
    public $fillable = [
        'driver_id',
        'quarter',
        'title',
        'date',
        'result',
        'file',
    ];
}
