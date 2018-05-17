<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
  public function school()
  {
      return $this->belongsTo('App\School');
  }

  public function drive()
  {
      return $this->hasMany('App\Drive');
  }

  public function course()
  {
    return $this->hasMany('App\Course');
  }
}
