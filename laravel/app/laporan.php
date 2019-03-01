<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
  protected $fillable = [
      'material', 'komentar','jumlah','id_user'
  ];


  public function users()
  {
    return hasMany('App\User');
  }

}
