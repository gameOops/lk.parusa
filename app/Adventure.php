<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    protected $table = 'adventure';

    public function writes()
    {
        return $this->hasMany('App\Write','adventure_id','id')->with('users')->with('comments')->with('likes')->orderBy('id','desc');
    }
}
