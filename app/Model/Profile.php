<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     public function user(){
        $this->belongsTo('User','user_id','id');
    }
}
