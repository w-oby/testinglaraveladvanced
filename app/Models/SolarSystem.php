<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Planet;

class SolarSystem extends Model
{
    
    public function planets() {

        return $this->hasMany(Planet::class);

    }

}
