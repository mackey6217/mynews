<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'birthday' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
    
    public function profile_histories()
    {
        return $this->hasMany('App\ProfileHistory');
    }
}
