<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permit;

class Company extends Model
{
    public $fillable = [
        'usdot',
        'user_id',
        'owner',
        'cname',
        'dot',
        'mc',
        'ein',
        'dba',
        'email',
        'phone',
        'aphone',
        'physicaladdress',
        'mailaddress',
        'image',
        'comptype',
        'operation',
        'trucks',
        'hazmat',
        'specialty',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function permits()
{
    return $this->hasMany(Permit::class, 'company_id', 'user_id');
}
}
