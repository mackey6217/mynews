<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'name' => 'ruquired',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
}
