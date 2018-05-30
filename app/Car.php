<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  public function school(){
      return $this->belongsTo('App\School');
  }
  public function drive()
  {
    return $this->hasMany('App\Drive');
  }
}
