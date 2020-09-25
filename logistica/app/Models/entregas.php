<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class entregas extends Model
{
    protected $table = 'entregas';

    public function relEntregas()
    {
        return $this->hasMany('App\Models\entregas','cliente_id','fornecedor_id','entregador_id','administrador_id');
    }
}

