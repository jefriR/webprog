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
        'name', 'email', 'password', 'phone', 'gender', 'address', 'picture',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasRole($role){
        // $user_role = User::roleToString($this->role);
        // dd($role);
        switch($this->role){
            case -1: return "guest" == $role;
            case 0: return "member" == $role;
            case 1: return "admin" == $role;
            default: return false;
        }
    }
}
