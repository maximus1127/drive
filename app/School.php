<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
  public function course()
  {
      return $this->hasMany('App\Course');
  }

  public function student()
  {
      return $this->hasMany('App\Student');
  }

  public function instructor()
  {
      return $this->hasMany('App\Instructor');
  }

  public function drive()
  {
      return $this->hasMany('App\Drive');
  }
  public function car(){
      return $this->hasMany('App\Car');
  }

  public function roster()
  {
      return $this->hasMany('App\Roster');
  }
  public function payment()
  {
      return $this->hasMany('App\Payment');
  }
}
