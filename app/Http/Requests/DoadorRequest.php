<?php

namespace conexaovida\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoadorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'nome' => 'required|max:150',
            'cpf' => 'required|max:11'
        ];
        
        
    }
    
    
    
    public function messages()
{
        
   return [
       'nome.required' => 'Campo Obrigatório!',
       'nome.max' => 'Tamanho máximo 150 caracteres!',
       'cpf.required' => 'Campo Obrigatório!',
       
   ];
}

}
