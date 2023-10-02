<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class creaUtenteRequest extends FormRequest
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
            'nome' => 'required||string',
            'cognome' => 'required|string',
            'email' => 'required|email|unique:users',
            'telefono' => 'number'
        ];
    }

    public function messages()
    {
        return [
            'nome.requried' => 'nome e obbligatorio',
            'nome.string' => 'nome eve essere una stinga',
            'cognome.requried' => 'cognome e obbligatorio',
            'conome.string' => 'cognome eve essere una stinga',
            'email.requried' => 'email e obbligatorio',
            'email.email' => 'email deve essere un tipo email',
            'telefono.number' => 'telefono deve essere un number',
        ];
    }
}
