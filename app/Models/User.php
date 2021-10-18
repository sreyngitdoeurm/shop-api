<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * we add to make relation of table
     * hasOne mean one to one
    */
    public function profile(){
        return $this->hasOne(Profile::class);
    }
    /**
     * we add to make relation post and user
     * hasMany mean one to many
    */
    public function post(){
        return $this->hasMany(Post::class);
    }
    /**
     * we add to make relation comment and user
     * hasMany mean one to many
    */
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function role(){
        return $this->hasOne(role::class);
    }
}
