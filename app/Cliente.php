<?php

namespace studyLaravelDB;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'db_clientes';
    protected $primaryKey = 'codigo';

    public function telefone(){
    	return $this->hasMany('studyLaravelDB\Telefone','codigo_cliente');
    }
}
