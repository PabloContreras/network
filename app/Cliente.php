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
        'rfc','nombre','apellido','email','telefono','direccion','password', 'membresia_id'
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
}
