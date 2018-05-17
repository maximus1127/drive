<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'last_name',
        'middle_name',
         'parent_first_name',
         'parent_last_name',
        'city',
        'state',
        'zip_code',
        'student_id',
         'school_id',
         'dob',
        'phone_1',
        'phone_2',
         'email_2',
         'address_1',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function school()
    {
      return $this->belongsTo('App\School');
    }
    public function grade(){

      return $this->hasOne('App\Grade');
    }
    public function drive()
    {
        return $this->hasMany('App\Drive');
    }
    public function roster()
    {
        return $this->hasMany('App\Roster');
    }
    public function courses()
    {
        return $this->belongsTo('App\Course');
    }


}
