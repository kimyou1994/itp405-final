<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $primaryKey = 'note_id';
    //ignore updated at or created at columns
    public $timestamps = false;
    public function user() {
    	return $this->belongsTo('App\User','id');
    }
}
