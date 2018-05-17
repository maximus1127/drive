<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
  public function course()
  {
      return $this->belongsTo('App\Course');
  }

  public function user(){
      return $this->belongsTo('App\User');
  }

  public function school()
  {
      return $this->belongsTo('App\School');
  }
}
