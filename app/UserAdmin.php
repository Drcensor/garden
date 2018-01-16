<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{

	public function order(){

        return $this->hasMany(User::class);
    }


    public function user(){

        return $this->belongsTo(User::class);
    }



     protected $fillable = [
         'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
