<?php

namespace conexaovida;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $table = 'doadores';
    protected $guarded = [];
    
    protected $fillable = ['id_doador', 'nome', 'cpf', 'nascimento', 'estado', 'cidade', 'endereco', 'genero', 'tiposanguineo', 'emailprincipal', 'emailalternativo', 'numerowhatsapp', 'outrocontato', 'dataultimadoacao', 'localultimadoacao'];


    public function user(){
   return $this->belongsTo('\conexaovida\User');
}
}
