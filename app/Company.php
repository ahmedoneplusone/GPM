<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    



    public function user(){
        return $this->hasOne('App\User');
    }
    public function project(){
        return $this->hasMany('App\Project');
    }
}
