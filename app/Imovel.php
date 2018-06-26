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
        return $this->belongsTo('App\Cidade', 'cidade_id');
    }

    public function galeria()
    {
    	return $this->hasMany('App\Galeria', 'imovel_id');
    }
}
