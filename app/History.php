<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guareded = array('id');
    
    public static $rules = array(
        'news_id' => 'required',
        'edited_at' => 'required',
        );
}
