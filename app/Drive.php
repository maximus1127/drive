<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User', 'student_id');
  }

  public function instructor()
  {
      return $this->belongsTo('App\Instructor');
  }

  public function school()
  {
      return $this->belongsTo('App\School');
  }
  public function car()
  {
    return $this->belongsTo('App\Car');
  }
}
