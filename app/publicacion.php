<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    public function likes()
    {
        return $this->hasMany(like::class);
    }
}
