<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{

  use Notifiable;
  protected $guard = 'admin';

  protected $fillable = [
      'name', 'username','password','id_user'
  ];
}
