<?php

namespace conexaovida;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Doador extends Model
{
    
    use SoftDeletes;
 
    
    protected $dates = ['deleted_at'];
    
    protected $table = 'doadores';
    protected $primaryKey = 'id_doador';
    protected $guarded = [];
    
    protected $fillable = ['id_doador', 'nome', 'cpf', 'nascimento', 'estado', 'cidade', 'endereco', 'genero', 'tiposanguineo', 'emailprincipal', 'emailalternativo', 'numerowhatsapp', 'outrocontato', 'dataultimadoacao', 'localultimadoacao'];


    public function user(){
   return $this->belongsTo('\conexaovida\User');
}
}
