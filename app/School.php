<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
  public function course()
  {
      return $this->hasMany('App\Course');
  }

  public function user()
  {
      return $this->hasMany('App\User');
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

  public function application()
  {
    return $this->hasMany('App\Application');
  }
}
