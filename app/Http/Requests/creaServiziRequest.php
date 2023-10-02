<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class creaServiziRequest extends FormRequest
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
            'nome_servizio' => 'required',
            'tipo' => 'string',
            'pezzo' => 'number',
            'attivo' => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'nome_Servizio.requried' => 'nome e obbligatorio',
            'tipo.string' => 'tipo deve essere una stinga',
            'prezzo.number' => 'prezzo deve essere un number',
            'attivo.boolean' => 'tipo deve essere una booleano'
        ];
    }
}
