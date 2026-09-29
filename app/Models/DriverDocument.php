<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverDocument extends Model
{
    protected $table = 'driver_documents';
    public $fillable = [
        'driver_id',
        'title',
        'subtitle',
        'expiration_date',
        'file',
    ];
}
