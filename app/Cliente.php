<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Cliente extends Model
{
    protected $connection = 'wayrurocon';
    protected $table = "cliente";
    public $timestamps = false;

    public static function porcentajesPorSexo($sexo){
    	return static::select(DB::raw('count(cli_sexo) as total'))
            ->where('cli_sexo','=',$sexo)
            ->where('cli_estado','=',1)
            ->get()
            ->first();
    }

    public static function totalClientes(){
    	return static::select(DB::raw('count(id) as total'))
    	->where('cli_estado','1')
    	->get()
    	->first();
    }
    
}
