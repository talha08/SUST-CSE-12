<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
   protected $table ='skills';

    //for User Model(One to Many)
    public function users(){
        return $this->belongsTo('App\Model\User','user_id','id');
    }
}
