<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'id';
    //ignore updated at or created at columns
    public $timestamps = false;
    public function notes() {
    	return $this->hasMany('App\Note');
    }
}
