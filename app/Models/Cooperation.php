<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function country(){

        return $this->belongsTo(Country::class);

    }
    
    public function industry(){

        return $this->belongsTo(Industry::class);

    }
    
    public function organizationtype(){

        return $this->belongsTo(OrganizationType::class);

    }
}
