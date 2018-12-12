<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $hidden = ['password'];
    
    public function clearance() {
            return $this->hasMany('App\CommeClearance', 'student_id', 'index_no');
    }
    public function studentProgramme() {
            return $this->belongsTo('App\Programme', 'programme','programme_id');
    }
}
