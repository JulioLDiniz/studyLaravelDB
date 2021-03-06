<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'db_clientes';
    protected $primaryKey = 'codigo';

    public function telefone(){
    	return $this->hasMany('App\Telefone','codigo_cliente');
    }

    public function manyTipos(){
    	return $this->belongsToMany('App\Tipo','db_clientes_has_db_tipos','codigo_cliente','codigo_tipo');
    }
}
