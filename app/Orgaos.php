<?php

namespace conexaovida;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Orgaos extends Model
{
    
    use SoftDeletes;
 
    
    protected $dates = ['deleted_at'];
    
    protected $table = 'orgaos';
    protected $primaryKey = 'id_doador';
    protected $guarded = [];
    
    protected $fillable = ['id_doador', 'nome', 'cpf', 'nascimento', 'estado', 'cidade', 'endereco', 'genero', 'tiposanguineo', 'orgaos', 'observacoes', 'emailprincipal', 'emailalternativo', 'numerowhatsapp', 'outrocontato'];


    public function user(){
   return $this->belongsTo('\conexaovida\User');
}
}
