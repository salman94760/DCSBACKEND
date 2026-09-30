<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverTrafficConviction extends Model
{
    protected $table = 'driver_traffic_convictions';
    public $fillable = [
        'driver_id',
        'state',
        'violation_type',
        'ticket_date',
        'conviction_date',
        'remark'
    ];
}
