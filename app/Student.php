<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function drive()
    {
      return $this->hasMany('App\Drive');
    }

    public function roster()
    {
      return $this->belongsTo('App\Roster');
    }
}
