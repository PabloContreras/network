<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function Admin()
	{
		return $this->belongsTo(Admin::class);
	}
	public function detalle()
    {
        return $this->hasOne(Detalles::class);
    }
    
}
