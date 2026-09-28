<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
        'oldcdlexpdate'             
    
    ];
    public function employment(){
        return $this->hasMany(Employment::class,'driver_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
