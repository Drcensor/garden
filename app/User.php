<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    public function order(){

        return $this->hasMany(Order::class);//hasMany = gives to!! & belongsTo means pulls from!!
    }


     public function basket(){

        return $this->hasMany(Basket::class);
    }


    //  protected $casts = [
    //     'is_admin' => 'boolean',
    // ];

    
    public function isAdmin()
    {
        return $this->admin; // this looks for an admin column in your users table
    }


    use Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'firstname','lastname', 'email', 'password',
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
