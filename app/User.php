<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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

    public function projects(){
        return $this->hasMany(Project::class, 'owner_id');
    }

    public function routeNotificationForSlack()
    {
        return 'https://hooks.slack.com/services/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';
    }

    public function routeNotificationForNexmo()
    {
        //usually a users phone column on the model
        return '+61406046531';
    }
}
