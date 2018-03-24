<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Contact extends Model
{
    public function group(){
    	return $this->belongsTo('App\Group');
    }
}
