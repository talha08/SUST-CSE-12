<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table='profiles';

    protected $fillable = [''];

    //For user Table (HasOne relation)
    public function users(){
        return $this->belongsTo('App\Model\User','user_id','id');
    }


    public static $genders =[
        'male'   =>	'Male',
        'female' =>	'Female'
    ];
}
