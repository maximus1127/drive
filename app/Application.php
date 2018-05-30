<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function school()
    {
      return $this->belongsTo('App\School');
    }

    public function user_submitted()
    {
      return $this->belongsTo('App\User' , 'bg_check_submitted_by');
    }
    public function user_received()
    {
      return $this->belongsTo('App\User' , 'bg_check_received_by');
    }
}
