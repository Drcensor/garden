<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

use Illuminate\Notifications\Notifiable;


class Purchase extends Controller
{
    use Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'users_id','plant', 'quantity', 'price'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
