<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    //
    public function chat()
    {
        return $this->belongsto('mensaje');
    }
}
