<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  public function school(){
      return $this->belongsTo('App\School');
  }
}
