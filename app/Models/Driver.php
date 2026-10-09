<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\DriverAccident;
use App\Models\DriverDocument;
use App\Models\DriverDrugTest;
use App\Models\DriverExperience;
use App\Models\DriverMiscellaneous;
use App\Models\DriverTrafficConviction;

class Driver extends Model
{
    public $fillable = [
        'user_id',               
        'company_id',             
        'fname',                     
        'mname',                   
        'lname',                     
        'activedate',                
        'dob',                       
        'phone',                     
        'email',                     
        'drugnegativedate',          
        'socialsecurity',            
        'appliedfor',                
        'driverstatus',              
        'pclearinghousedate',        
        'terminationdate',           
        'emecontactno',           
        'emecontactperson',           
        'reasonleavingortermination',
        'legalrightsstatus',         
        'workauthorization',         
        'permituscisno',             
        'permitexpdate',             
        'currentstreet',             
        'currentcity',               
        'currentstate',              
        'currentzip',                
        'currentyear',               
        'mailingstreet',             
        'mailingcity',               
        'mailingstate',              
        'mailingzip',                
        'mailingyear',               
        'previousstreet',          
        'previouscity',              
        'previousstate',            
        'previouszip',               
        'previousyear',              
        'currentcdlstate',           
        'currentcdllicenseno',       
        'currentcdlclass',           
        'currentcdlendorsements',    
        'currentcdlissuedate',       
        'currentcdlexpdate',         
        'oldcdlstate',               
        'oldcdllicenseno',          
        'oldcdlclass',               
        'oldcdlendorsements',        
        'oldcdlissuedate',           
        'oldcdlexpdate' ,
        'esign',
        'esigndata',
        'ip_address',
        'timezone',
        'time_date',
        'applicationpath'   
    ];

    public function employment()
    {
        return $this->hasMany(Employment::class, 'driver_id', 'id');
    }

    public function accident()
    {
        return $this->hasMany(DriverAccident::class, 'driver_id', 'id');
    }

    public function document()
    {
        return $this->hasMany(DriverDocument::class, 'driver_id', 'id');
    }

    public function drugtest()
    {
        return $this->hasMany(DriverDrugTest::class, 'driver_id', 'id');
    }

    public function experience()
    {
        return $this->hasMany(DriverExperience::class, 'driver_id', 'id');
    }

    public function miscellaneous()
    {
        return $this->hasMany(DriverMiscellaneous::class, 'driver_id', 'id');
    }

    public function trafficconviction()
    {
        return $this->hasMany(DriverTrafficConviction::class,'driver_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }

    protected $casts = [
        'esigndata' => 'array',
        'us_time_date' => 'datetime',
    ];
}
