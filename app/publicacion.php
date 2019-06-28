<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    
    public function comentarios()
    {
        return $this->hasmany('comentario');
    }

    public function likes()
    {
        return $this->hasmany('like');
    }
}
