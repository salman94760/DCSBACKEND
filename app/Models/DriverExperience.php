<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverExperience extends Model
{
    protected $table = 'driver_experience';

    protected $fillable = [
        'driver_id',
        'equipment',
        'equipment_type',
        'from_date',
        'to_date',
        'miles',
        'accidenthistory',
        'convictionhistory',
        'licensedeniedstatus',
        'licensesuspendedstatus',
        'licensedeniedremarks',
        'licensesuspendedremarks',
    ];
}