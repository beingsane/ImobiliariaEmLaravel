<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = "imoveis";

    public function Tipo()
    {
        return $this->belongsTo('App\Tipo', 'tipo_id');
    }

    public function Cidade()
    {
        return $this->belongTo('App\Cidade', 'cidade_id');
    }
}
