<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $table = 'driver_employments';
    public $fillable = [
        'company_id',
        'driver_id',
        'cname',
        'contactno',
        'email',
        'currentstreet',
        'currentcity',
        'currentzip',
        'currentstate',
        'positionheld',
        'startdate',
        'enddate',
        'reasonleaving',
        'employmentgap',
        'fmcsr',
        'safetysensitive',
    ];

}