<?php

namespace App;

use App\Membresia;
use App\Notifications\ClienteResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cliente extends Authenticatable
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
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ClienteResetPassword($token));
    }
    public function isAdmin()
    {
        return false;
    }
    public function isClient()
    {
        return true;
    }

    public function membresia()
    {
        return $this->hasOne(Membresia::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
