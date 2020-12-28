<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function getClientNameAttribute($value){
        return "Mr. " . $value;
    }
    public function getContactAttribute($value){
        return "(+91) " . $value;
    }
    public function getAltContactAttribute($value){
        return "(+91) " . $value;
    }

    public function setClientNameAttribute($value){
        $this->attributes['client_name'] = strtoupper($value);
    }

    public function setEmailAttribute($value){
        $this->attributes['email'] = strtolower($value);
    }
    
}
