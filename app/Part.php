<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function subparts(){
        return $this->hasMany(Subpart::class);
    }
}
