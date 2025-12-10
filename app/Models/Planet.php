<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SolarSystem;

class Planet extends Model
{
    
    public function solarSystem() {

        return $this->belongsTo(SolarSystem::class);

    }

}
