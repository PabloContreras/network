<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public function Admin()
	{
		return $this->belongsTo(Admin::class);
	}
	public function asistentes()
    {
        return $this->hasMany(Asistente::class);
    }
}
