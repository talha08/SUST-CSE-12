<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user(){
        $this->belongsTo('User','user_id','id');
    }
}
