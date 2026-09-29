<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverDocument extends Model
{
    protected $table = 'driver_documents';
    public $fillable = [
        'driver_id',
        'title',
        'slug',
        'subtitle',
        'expiration_date',
        'file',
    ];
}
