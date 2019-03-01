<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class excel_data extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'material', 'material_description', 'base_unit', 'unrestricted', 'currency', 'value_unrestricted',
        'harga',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
