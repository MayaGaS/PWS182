<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formValid extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|min:4', //Nombre: (Obligatorio y mínimo 4 caracteres)
            'fechaPublicacion' => 'required', //Fecha Publicación: (Obligatorio)
            'noComicPublicado' => 'required|max:4|numeric', //No. Comics publicados: (Obligatorio, números, máximo 4 números)
        ];
    }
}
