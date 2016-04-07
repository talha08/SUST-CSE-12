<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AcademicStatus extends Model
{
    public function user(){
        $this->belongsTo('User','user_id','id');
    }
}
