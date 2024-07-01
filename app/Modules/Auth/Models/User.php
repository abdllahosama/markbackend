<?php

namespace App\Modules\Auth\Models;



use Laravel\Sanctum\HasApiTokens;
use App\Modules\Rating\Models\Rating;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles ,SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    // protected $guard_name = 'web';
    protected $table = 'users';

    protected $guarded = [];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Set connection for tracker package.
     */
    protected $connection = 'mysql';


}
