<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Permit extends Model
{
    protected $fillable = [
        'company_id',
        'permitname',
        'jurisdiction',
        'assignto',
        'status',
        'expirydate',
        'servicefee',
        'govfee',
        'processingfee',
        'discount',
        'docremarks',
        'notes',
        'total',
        'docimage'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'user_id');
    }
}