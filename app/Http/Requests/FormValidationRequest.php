<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationRequest extends FormRequest
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
            "nm_serie" => "required|min:3",
            "num_temporada" => "required",
            "num_ep" => "required"
        ];
    }

    /*
    PERSONALIZA O NOME DOS CAMPOS DO FRONT PARA QUANDO FOREM SER EXIBIDOS NA MENSAGEM DE ERRO ATRAVÉS DO :attribute      
    
    public function attributes()
    {
        return [
            "nm_serie" => "O nome da série",
            "num_temporada" => "O número de temporadas",
            "num_ep" => "O número de episódios"
        ];
    }*/

    public function messages()
    {
        return [
            # OS 3 PRIMEIROS USOS DE required ABAIXO PODERIAM SER FEITOS DE OUTRA FORMA.
            # A OUTRA FORMA SERIA: "required" => ":attribute é obrigatório." 
            "nm_serie.required" => " O nome da série é obrigatório.",
            "num_temporada.required" => "O número de temporadas é obrigatório.",
            "num_ep.required" => "O número de episódios é obrigatório.",

            "nm_serie.min" => "O nome da série pode ter no mínimo 2 caracteres.",
        ];
    }
}
