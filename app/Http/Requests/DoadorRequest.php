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
            'cpf' => 'required|numeric',
            'nascimento' => 'required|date',
            'estado' => 'required|max:150',
            'cidade' => 'required|max:150',
            'endereco' => 'required|max:250',
            'emailprincipal' => 'required|email',
            'numerowhatsapp' => 'required|numeric'
        ];
        
        
    }
    
    
    
    public function messages()
{
        
   return [
       'nome.required' => 'Campo Obrigatório!',
       'nome.alpha' => 'Somente letras',
       'nome.max' => 'Tamanho máximo 150 caracteres!',
       'cpf.required' => 'Campo Obrigatório!',
       'cpf.numeric' => 'Somente números',
       'nascimento.required' => 'Data obrigatório',
       'nascimento.date' => 'Formato inválido',
       'estado.required' => 'Campo Obrigatório!',
       'estado.alpha' => 'Somente letras',
       'estado.max' => 'Tamanho máximo 150 caracteres!',
       'cidade.required' => 'Campo Obrigatório!',
       'cidade.alpha' => 'Somente letras',
       'cidade.max' => 'Tamanho máximo 150 caracteres!',
       'endereco.required' => 'Campo Obrigatório!',
       'endereco.max' => 'Tamanho máximo 250 caracteres!',
       'emailprincipal.required' => 'Campo Obrigatório!',
       'emailprincipal.email' => 'e-mail inválido',
       'numerowhatsapp.required' => 'Campo Obrigatório!',
       'numerowhatsapp.numeric' => 'Somente números'
      
       
   ];
}

}
