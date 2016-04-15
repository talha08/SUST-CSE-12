<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user(){
        return $this->belongsTo('App\Model\User','user_id','id');
    }
}
