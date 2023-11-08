<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormLib extends FormRequest
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
            //
            'txtIsbn' => 'required|min:13 | regex:/^[0-9]+$/',
            'txtTitulo' => 'required | max:10',
            'txtAutor' => 'required|max:50',
            'txtPaginas' => 'required | max:50 | regex:/^[0-9]+$/',
            'txtEditorial' => 'required|max:50',
            'txtEmail' => 'required | max:50 |email',
        ];
    }
}
