<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    //
    public function mensajes()
    {
        return $this->hasmany('mensaje');
    }
}
}
