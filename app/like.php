<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    //

    public function publicacion()
    {
        return $this->belongsto('publicacion');
    }
}
