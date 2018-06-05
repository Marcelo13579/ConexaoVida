<?php

namespace conexaovida;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $guarded = [];
    
    public function user(){
   return $this->belongsTo('\conexaovida\User');
}


}
