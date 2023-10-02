<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiziResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nome_servizio' => $this->nome_servizio,
            'prezzo'  => $this->prezzo,
            'tipo' => $this->tipo,
            'attivo' => $this->attivo,
        ];
    }
}
