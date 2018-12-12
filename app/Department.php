<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public function programme(){
        return $this->hasMany('App\Programme','department_id');
    }
}
