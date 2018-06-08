<?php

namespace conexaovida;

use Illuminate\Database\Eloquent\Model;

class Orgaos extends Model
{
    protected $table = 'orgaos';
    protected $guarded = [];
    
    protected $fillable = ['id_doador', 'nome', 'cpf', 'nascimento', 'estado', 'cidade', 'endereco', 'genero', 'tiposanguineo', 'orgaos', 'observacoes', 'emailprincipal', 'emailalternativo', 'numerowhatsapp', 'outrocontato'];


    public function user(){
   return $this->belongsTo('\conexaovida\User');
}
}
