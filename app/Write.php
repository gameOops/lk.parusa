<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Write extends Model
{
    protected $table = 'writes';

    public function users()
    {
        return $this->hasMany('App\User','id','user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comments','write_id','id')->with('users');
    }

    public function likes()
    {
        return $this->hasMany('App\Like','write_id','id');
    }
}
