<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contact;
class Group extends Model
{
    public function contacts(){
    	return $this->hasMany('App\Contact');
    }
}
