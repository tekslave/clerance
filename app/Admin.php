<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admin';
    protected $hidden= ['password'];
    protected $fillable = ['token'];

    public function department(){
        return $this.belongsTo('App\Department', 'department', 'department_id');
    }
}
